
/**
 * navbar.js — Admin Dashboard
 * Handles search, dropdown keyboard nav, notification actions,
 * and sticky navbar scroll shadow.
 */
 
(function () {
    'use strict';
 
    /* ── DOM References ─────────────────────────────────────── */
    const navbar          = document.getElementById('top-navbar');
    const searchInput     = document.getElementById('navbarSearch');
    const searchClearBtn  = document.getElementById('searchClearBtn');
    const notifBtn        = document.getElementById('notifDropdownBtn');
    const profileBtn      = document.getElementById('profileDropdownBtn');
 
    /* ── Navbar scroll shadow ───────────────────────────────── */
    function updateNavbarShadow() {
        if (!navbar) return;
        if (window.scrollY > 4) {
            navbar.style.boxShadow = '0 4px 24px rgba(30, 10, 60, 0.12)';
        } else {
            navbar.style.boxShadow = '0 2px 16px rgba(30, 10, 60, 0.07)';
        }
    }
 
    window.addEventListener('scroll', updateNavbarShadow, { passive: true });
 
    /* ── Search ─────────────────────────────────────────────── */
    if (searchInput) {
        // Show/hide clear button
        searchInput.addEventListener('input', function () {
            if (searchClearBtn) {
                searchClearBtn.style.display = this.value.length > 0 ? 'flex' : 'none';
            }
        });
 
        // Keyboard shortcut: '/' or 'Ctrl + K' focuses search
        document.addEventListener('keydown', function (e) {
            const active = document.activeElement;
            const isTyping = active.tagName === 'INPUT' || active.tagName === 'TEXTAREA' || active.isContentEditable;
 
            if ((e.key === '/' && !isTyping) || (e.ctrlKey && e.key === 'k')) {
                e.preventDefault();
                searchInput.focus();
                searchInput.select();
            }
 
            // Escape clears and blurs search
            if (e.key === 'Escape' && document.activeElement === searchInput) {
                searchInput.value = '';
                searchInput.blur();
                if (searchClearBtn) searchClearBtn.style.display = 'none';
            }
        });
    }
 
    // Clear button
    if (searchClearBtn) {
        searchClearBtn.addEventListener('click', function () {
            if (searchInput) {
                searchInput.value = '';
                searchInput.focus();
            }
            this.style.display = 'none';
        });
    }
 
    /* ── Profile dropdown toggle ────────────────────────────── */
    // Bootstrap handles dropdown, but we toggle .show on the button for CSS
    if (profileBtn) {
        profileBtn.addEventListener('show.bs.dropdown', function () {
            this.classList.add('show');
        });
        profileBtn.addEventListener('hide.bs.dropdown', function () {
            this.classList.remove('show');
        });
    }
 
    if (notifBtn) {
        notifBtn.addEventListener('show.bs.dropdown', function () {
            this.classList.add('show');
        });
        notifBtn.addEventListener('hide.bs.dropdown', function () {
            this.classList.remove('show');
        });
    }
 
    /* ── Mark notifications as read ─────────────────────────── */
    const markAllRead = document.getElementById('markAllReadBtn');
    if (markAllRead) {
        markAllRead.addEventListener('click', function (e) {
            e.preventDefault();
 
            // Remove all unread indicators
            document.querySelectorAll('.notif-item.unread').forEach(item => {
                item.classList.remove('unread');
            });
            document.querySelectorAll('.notif-unread-dot').forEach(dot => {
                dot.style.opacity = '0';
            });
 
            // Clear badge
            const badge = document.querySelector('#notifDropdownBtn .icon-badge');
            if (badge) {
                badge.textContent = '0';
                badge.style.display = 'none';
            }
 
            this.textContent = 'All read';
        });
    }
 
    /* ── Individual notification read ───────────────────────── */
    document.querySelectorAll('.notif-item').forEach(item => {
        item.addEventListener('click', function () {
            this.classList.remove('unread');
            const dot = this.querySelector('.notif-unread-dot');
            if (dot) dot.style.opacity = '0';
 
            // Update count
            updateNotifCount();
        });
    });
 
    function updateNotifCount() {
        const unreadCount = document.querySelectorAll('.notif-item.unread').length;
        const badge = document.querySelector('#notifDropdownBtn .icon-badge');
        if (badge) {
            if (unreadCount > 0) {
                badge.textContent = unreadCount;
                badge.style.display = 'flex';
            } else {
                badge.style.display = 'none';
            }
        }
    }
 
    /* ── Init ────────────────────────────────────────────────── */
    updateNavbarShadow();
 
})();
 