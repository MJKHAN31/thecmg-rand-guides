# Orca ABA — WordPress Theme

A custom WordPress theme for Orca ABA Therapy, built to brand guidelines (palette, voice, person-first language) and matching the orcaaba.com site structure.

## What's included

- **Homepage** (`front-page.php`) — hero with "Leading with love, not labels," proof points, intake form band (sage → teal split), four differentiator cards, Dr. Adolphson founder section, ages strip, CTA band
- **About Us** page template — story, five core values, founder bio, CTA
- **Services** page template — six service cards (in-home, community, complex cases, adolescent/young adult, parent coaching, Spanish-language), Utah coverage, CTA
- **Careers** page template — pulls from custom `Open Positions` post type, falls back to placeholder roles, "Why Orca" split, CTA
- **Contact Us** page template — full intake form with diagnosis, insurance, ZIP, age-range, message
- **Custom post types**:
  - `Open Positions` — for job listings on the Careers page
  - `Intake Inquiries` — automatically captures form submissions privately in the admin
- **AJAX intake form handler** — no plugin required; form submissions are stored as private posts and emailed to the admin
- **Mobile-responsive** with sticky header and hamburger nav
- **Accessibility**: skip link, focus styles, semantic HTML, `prefers-reduced-motion` support, screen-reader-only labels on form inputs

## Brand palette (locked)

| Color | Hex | Use |
|-------|-----|-----|
| Orca Black | `#000000` | Headlines, body, primary CTA |
| Orca Teal | `#48BEA6` | Accent text, brand band, highlights |
| Soft Sage | `#B6DCB3` | Supporting band, soft accents |
| White | `#FFFFFF` | Primary background |

These are CSS custom properties (`--orca-black`, `--orca-teal`, `--orca-sage`, `--orca-white`) defined at the top of `style.css`.

## Installation

1. **Zip the folder**: select all files in `orca-theme/` and zip them. The zip should contain `style.css`, `functions.php`, etc. at the root (NOT inside another `orca-theme/` folder when extracted).
2. **WordPress admin**: Appearance → Themes → Add New → Upload Theme → Upload the zip → Activate.
3. **Set the homepage**: Settings → Reading → "Your homepage displays" → "A static page" → Homepage: select the page using the homepage template (or just use the default — `front-page.php` runs automatically).
4. **Create pages**:
   - Pages → Add New → Title: "About Us" → Page Attributes → Template: "Orca — About Us" → Publish
   - Repeat for Services, Careers, Contact Us
5. **Create the menu**: Appearance → Menus → Create new menu → Add the four pages → Display location: "Primary Menu" → Save.
6. **Add a logo** (optional): Appearance → Customize → Site Identity → Logo. (If no logo is uploaded, the theme uses a built-in SVG mark.)
7. **Add real photos**: Drop images named `hero-child.jpg`, `dr-adolphson.jpg`, `about-team.jpg`, `careers.jpg` into `wp-content/themes/orca-aba/assets/images/`. Until then, the theme shows clearly labeled placeholders.

## Adding job listings

Open Positions → Add New. Fill in the title (job role), the description (responsibilities, qualifications), and an excerpt (1-line summary that shows on the Careers page).

To add **location** and **type** metadata to a job, you'll need a custom field plugin (ACF) or use the built-in Custom Fields meta box (Screen Options → Custom Fields). Use the keys:
- `orca_job_location` (e.g., "Salt Lake County")
- `orca_job_type` (e.g., "Full-time")

## Viewing intake submissions

Submissions from the homepage and contact forms are stored privately in WordPress under **Intake Inquiries** in the admin sidebar. You'll also receive an email notification at the site admin email each time a new lead comes in.

## Brand rules baked in

- **Service language**: "in-home and community-based" or "individualized" — never "in-clinic."
- **Person-first language**: "child on the autism spectrum," "individuals with autism."
- **Differentiators surfaced everywhere**: ages 1–21, complex cases, mental health + ABA, Dr. Adolphson, no waitlist, Hablamos Español.
- **Imagery placeholders flag what's needed**: real, candid, age-diverse photos — never stock.

## Files

```
orca-theme/
├── style.css                     ← theme metadata + all styles
├── functions.php                 ← setup, menus, CPTs, AJAX
├── header.php                    ← site header
├── footer.php                    ← site footer
├── front-page.php                ← homepage
├── page.php                      ← generic page fallback
├── single.php                    ← single post + single job
├── index.php                     ← required fallback
├── 404.php                       ← 404 page
├── screenshot.png                ← admin preview image
├── page-templates/
│   ├── page-about.php
│   ├── page-services.php
│   ├── page-careers.php
│   └── page-contact.php
└── assets/
    ├── css/                      ← (reserved for future)
    ├── js/orca.js                ← menu toggle + AJAX form
    └── images/                   ← drop real photos here
```

## Version

1.0.0 — initial release. Built to match orcaaba.com structure as of May 2026.
