/**
 * Orca ABA — front-end JS
 * Handles: mobile menu toggle, intake form submission, contact form submission.
 */
(function () {
	'use strict';

	/* ---------- Mobile menu ---------- */
	const toggle = document.querySelector('.menu-toggle');
	const nav = document.getElementById('primary-menu');

	if (toggle && nav) {
		toggle.addEventListener('click', function () {
			const isOpen = nav.classList.toggle('is-open');
			toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
		});
	}

	/* ---------- Helper: serialize form to FormData ---------- */
	function getFormData(form) {
		const fd = new FormData(form);
		fd.append('action', 'orca_intake');
		if (window.orcaData && window.orcaData.nonce) {
			fd.append('nonce', window.orcaData.nonce);
		}
		return fd;
	}

	/* ---------- Helper: render a status message inside a form ---------- */
	function renderMsg(form, type, text) {
		const msgEl = form.querySelector('.intake-form__msg, .contact-form__msg');
		if (!msgEl) return;
		msgEl.textContent = text;
		msgEl.style.padding = '0.75rem 1rem';
		msgEl.style.borderRadius = '8px';
		msgEl.style.fontWeight = '600';
		if (type === 'success') {
			msgEl.style.background = '#EAF6E8';
			msgEl.style.color = '#1F6B3A';
		} else {
			msgEl.style.background = '#FDECEA';
			msgEl.style.color = '#A02323';
		}
	}

	/* ---------- Submit handler (shared) ---------- */
	function bindForm(form) {
		if (!form) return;
		form.addEventListener('submit', function (e) {
			e.preventDefault();
			const submitBtn = form.querySelector('button[type="submit"]');
			const origLabel = submitBtn ? submitBtn.textContent : '';
			if (submitBtn) {
				submitBtn.disabled = true;
				submitBtn.textContent = 'Sending…';
			}

			fetch(window.orcaData ? window.orcaData.ajaxUrl : '/wp-admin/admin-ajax.php', {
				method: 'POST',
				credentials: 'same-origin',
				body: getFormData(form),
			})
				.then(function (res) { return res.json().catch(function () { return { success: false }; }); })
				.then(function (json) {
					if (json && json.success) {
						renderMsg(form, 'success', (json.data && json.data.message) || "Thanks — we'll be in touch within 24 hours.");
						form.reset();
					} else {
						const msg = (json && json.data && json.data.message) || 'Something went wrong. Please call us at 801.407.9422.';
						renderMsg(form, 'error', msg);
					}
				})
				.catch(function () {
					renderMsg(form, 'error', 'Network error. Please call 801.407.9422.');
				})
				.finally(function () {
					if (submitBtn) {
						submitBtn.disabled = false;
						submitBtn.textContent = origLabel;
					}
				});
		});
	}

	bindForm(document.getElementById('orca-intake-form'));
	bindForm(document.getElementById('orca-contact-form'));

})();
