<?php
/**
 * Orca ABA — functions.php
 * Theme setup, asset enqueuing, menu registration, custom post types.
 *
 * @package Orca_ABA
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'ORCA_THEME_VERSION', '1.0.0' );
define( 'ORCA_THEME_DIR', get_template_directory() );
define( 'ORCA_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function orca_theme_setup() {
	load_theme_textdomain( 'orca-aba', ORCA_THEME_DIR . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
		'gallery', 'caption', 'style', 'script',
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'orca-aba' ),
		'footer'  => __( 'Footer Menu', 'orca-aba' ),
	) );

	// Image sizes
	add_image_size( 'orca-hero', 1200, 1500, true );
	add_image_size( 'orca-card', 720, 720, true );
	add_image_size( 'orca-thumb', 360, 360, true );
}
add_action( 'after_setup_theme', 'orca_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function orca_theme_assets() {
	wp_enqueue_style(
		'orca-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'orca-style',
		get_stylesheet_uri(),
		array( 'orca-fonts' ),
		ORCA_THEME_VERSION
	);

	wp_enqueue_script(
		'orca-script',
		ORCA_THEME_URI . '/assets/js/orca.js',
		array(),
		ORCA_THEME_VERSION,
		true
	);

	wp_localize_script( 'orca-script', 'orcaData', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'orca_intake_nonce' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'orca_theme_assets' );

/**
 * Register Job custom post type for Careers page.
 */
function orca_register_jobs_cpt() {
	register_post_type( 'orca_job', array(
		'labels' => array(
			'name'          => __( 'Open Positions', 'orca-aba' ),
			'singular_name' => __( 'Position', 'orca-aba' ),
			'add_new_item'  => __( 'Add New Position', 'orca-aba' ),
			'edit_item'     => __( 'Edit Position', 'orca-aba' ),
			'menu_name'     => __( 'Open Positions', 'orca-aba' ),
		),
		'public'       => true,
		'has_archive'  => 'careers',
		'menu_icon'    => 'dashicons-businessperson',
		'supports'     => array( 'title', 'editor', 'excerpt' ),
		'show_in_rest' => true,
		'rewrite'      => array( 'slug' => 'careers' ),
	) );
}
add_action( 'init', 'orca_register_jobs_cpt' );

/**
 * Sanitize and process intake form submissions.
 * Stores submission as a private CPT entry and triggers email.
 */
function orca_register_intake_cpt() {
	register_post_type( 'orca_intake', array(
		'labels'        => array(
			'name'          => __( 'Intake Inquiries', 'orca-aba' ),
			'singular_name' => __( 'Inquiry', 'orca-aba' ),
		),
		'public'        => false,
		'show_ui'       => true,
		'menu_icon'     => 'dashicons-email-alt',
		'supports'      => array( 'title', 'editor' ),
		'capability_type' => 'post',
	) );
}
add_action( 'init', 'orca_register_intake_cpt' );

function orca_handle_intake() {
	check_ajax_referer( 'orca_intake_nonce', 'nonce' );

	$name  = isset( $_POST['name'] )  ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$zip   = isset( $_POST['zip'] )   ? sanitize_text_field( wp_unslash( $_POST['zip'] ) ) : '';
	$msg   = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( empty( $name ) || empty( $email ) || ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => __( 'Please provide a name and a valid email.', 'orca-aba' ) ), 400 );
	}

	$post_id = wp_insert_post( array(
		'post_type'   => 'orca_intake',
		'post_status' => 'private',
		'post_title'  => sprintf( '%s — %s', $name, current_time( 'Y-m-d H:i' ) ),
		'post_content' => sprintf(
			"Name: %s\nEmail: %s\nPhone: %s\nZIP: %s\n\nMessage:\n%s",
			$name, $email, $phone, $zip, $msg
		),
	) );

	if ( is_wp_error( $post_id ) || ! $post_id ) {
		wp_send_json_error( array( 'message' => __( 'Something went wrong. Please call us directly.', 'orca-aba' ) ), 500 );
	}

	$to       = get_option( 'admin_email' );
	$subject  = sprintf( '[Orca ABA] New intake inquiry from %s', $name );
	$body     = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nZIP: {$zip}\n\n{$msg}";
	$headers  = array( 'Content-Type: text/plain; charset=UTF-8', "Reply-To: {$name} <{$email}>" );
	wp_mail( $to, $subject, $body, $headers );

	wp_send_json_success( array(
		'message' => __( "Thanks — we'll be in touch within 24 hours.", 'orca-aba' ),
	) );
}
add_action( 'wp_ajax_orca_intake', 'orca_handle_intake' );
add_action( 'wp_ajax_nopriv_orca_intake', 'orca_handle_intake' );

/**
 * Filter the document title for cleaner output.
 */
function orca_document_title_separator( $sep ) { return '|'; }
add_filter( 'document_title_separator', 'orca_document_title_separator' );

/**
 * Custom body classes.
 */
function orca_body_classes( $classes ) {
	if ( is_singular() ) $classes[] = 'is-singular';
	if ( is_page() )     $classes[] = 'is-page-' . sanitize_html_class( get_post_field( 'post_name' ) );
	return $classes;
}
add_filter( 'body_class', 'orca_body_classes' );

/**
 * Helper: render the Orca logo SVG (used in header & footer).
 */
function orca_logo_svg( $color = '#000000' ) {
	$color = esc_attr( $color );
	?>
	<svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
		<path fill="<?php echo $color; ?>" d="M32 6c14.4 0 26 11.6 26 26S46.4 58 32 58 6 46.4 6 32 17.6 6 32 6zm0 4C19.85 10 10 19.85 10 32c0 5.5 2 10.5 5.4 14.4 1.5-2.6 3.7-4.7 6.4-6 .6-3.3 2.4-6 4.9-7.7-1.5-1.5-2.4-3.5-2.4-5.7 0-4.4 3.6-8 8-8s8 3.6 8 8c0 .8-.1 1.5-.3 2.2 4.7 1.4 8.2 5.7 8.2 10.8 0 .9-.1 1.7-.3 2.5 2.5-.8 4.7-2.4 6.3-4.5C56 42.5 58 37.5 58 32c0-12.15-9.85-22-22-22z"/>
		<circle fill="<?php echo $color; ?>" cx="34" cy="26" r="2.5"/>
	</svg>
	<?php
}

/**
 * Helper: render a small icon used in proof bullets.
 */
function orca_proof_icon() {
	?>
	<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
		<path d="M4 12c2-3 5-5 8-5s6 2 8 5c-2 3-5 5-8 5s-6-2-8-5z" fill="currentColor"/>
		<circle cx="13" cy="11" r="1.5" fill="#FFFFFF"/>
	</svg>
	<?php
}

/**
 * Allow shortcodes inside widgets.
 */
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Disable WP emojis for performance.
 */
function orca_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
add_action( 'init', 'orca_disable_emojis' );
