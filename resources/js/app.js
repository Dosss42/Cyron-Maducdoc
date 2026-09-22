/**
 * Mobile navigation toggle.
 */
function initMobileNav() {
    const toggle = document.getElementById('nav-toggle');
    const menu = document.getElementById('mobile-nav');
    const iconOpen = document.getElementById('nav-toggle-icon-open');
    const iconClose = document.getElementById('nav-toggle-icon-close');

    if (!toggle || !menu) {
        return;
    }

    const closeMenu = () => {
        menu.classList.add('hidden');
        toggle.setAttribute('aria-expanded', 'false');
        iconOpen?.classList.remove('hidden');
        iconClose?.classList.add('hidden');
    };

    toggle.addEventListener('click', () => {
        const isOpen = !menu.classList.contains('hidden');

        if (isOpen) {
            closeMenu();
            return;
        }

        menu.classList.remove('hidden');
        toggle.setAttribute('aria-expanded', 'true');
        iconOpen?.classList.add('hidden');
        iconClose?.classList.remove('hidden');
    });

    menu.querySelectorAll('[data-mobile-nav-link]').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });
}

/**
 * Highlights the nav link for the section currently in view.
 */
function initActiveSectionTracking() {
    const navLinks = document.querySelectorAll('[data-nav-link]');

    if (!navLinks.length) {
        return;
    }

    const sections = Array.from(navLinks)
        .map((link) => document.querySelector(link.getAttribute('href')))
        .filter(Boolean);

    if (!sections.length) {
        return;
    }

    const setActive = (id) => {
        navLinks.forEach((link) => {
            link.classList.toggle('is-active', link.getAttribute('href') === `#${id}`);
        });
    };

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    setActive(entry.target.id);
                }
            });
        },
        { rootMargin: '-45% 0px -50% 0px', threshold: 0 }
    );

    sections.forEach((section) => observer.observe(section));
}

/**
 * Dark mode toggle. The initial `.dark` class is set synchronously in
 * <head> (see layout.blade.php) to avoid a flash of the wrong theme —
 * this just keeps the button, icons, and localStorage in sync.
 */
function initThemeToggle() {
    const toggle = document.getElementById('theme-toggle');
    const sunIcon = document.getElementById('theme-toggle-icon-sun');
    const moonIcon = document.getElementById('theme-toggle-icon-moon');

    if (!toggle) {
        return;
    }

    const syncIcons = (isDark) => {
        toggle.setAttribute('aria-pressed', String(isDark));
        sunIcon?.classList.toggle('hidden', !isDark);
        moonIcon?.classList.toggle('hidden', isDark);
    };

    syncIcons(document.documentElement.classList.contains('dark'));

    toggle.addEventListener('click', () => {
        const isDark = document.documentElement.classList.toggle('dark');
        syncIcons(isDark);

        try {
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        } catch (e) {
            // Private browsing / storage disabled — theme just won't persist.
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initMobileNav();
    initActiveSectionTracking();
    initThemeToggle();
});
