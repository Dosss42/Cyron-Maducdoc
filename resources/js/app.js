/**
 * Swaps two stacked icons (e.g. hamburger ↔ close) with an opacity + rotate
 * cross-fade instead of an instant hidden/visible cut.
 */
function setIconSwapState(showEl, hideEl) {
    showEl?.classList.remove('opacity-0', 'rotate-45', '-rotate-45');
    showEl?.classList.add('opacity-100', 'rotate-0');

    hideEl?.classList.remove('opacity-100', 'rotate-0');
    hideEl?.classList.add('opacity-0', 'rotate-45');
}

/**
 * Mobile navigation toggle. The panel animates open/closed via a CSS grid
 * track (see .mobile-nav in app.css) — this just flips the state classes
 * and keeps focus/assistive tech out of the collapsed panel via `inert`.
 */
function initMobileNav() {
    const toggle = document.getElementById('nav-toggle');
    const menu = document.getElementById('mobile-nav');
    const iconOpen = document.getElementById('nav-toggle-icon-open');
    const iconClose = document.getElementById('nav-toggle-icon-close');

    if (!toggle || !menu) {
        return;
    }

    const setOpen = (isOpen) => {
        menu.classList.toggle('is-open', isOpen);
        menu.inert = !isOpen;
        toggle.setAttribute('aria-expanded', String(isOpen));
        setIconSwapState(isOpen ? iconClose : iconOpen, isOpen ? iconOpen : iconClose);
    };

    toggle.addEventListener('click', () => {
        setOpen(!menu.classList.contains('is-open'));
    });

    menu.querySelectorAll('[data-mobile-nav-link]').forEach((link) => {
        link.addEventListener('click', () => setOpen(false));
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
        setIconSwapState(isDark ? sunIcon : moonIcon, isDark ? moonIcon : sunIcon);
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

/**
 * Gives the sticky header a soft edge only once there's page content
 * scrolled underneath it — a hard 1px border at rest reads as a fixed
 * bar; a shadow that fades in reads as a translucent layer floating
 * over content (see .site-header.is-scrolled in app.css).
 */
function initHeaderScrollEdge() {
    const header = document.getElementById('site-header');

    if (!header) {
        return;
    }

    const sync = () => {
        header.classList.toggle('is-scrolled', window.scrollY > 4);
    };

    sync();
    window.addEventListener('scroll', sync, { passive: true });
}

/**
 * Fades each `.reveal` section in as it enters the viewport and back out
 * as it leaves — in either direction, every time, not just once. Skipped
 * entirely for reduced-motion: sections just stay visible.
 */
function initScrollReveal() {
    const targets = document.querySelectorAll('.reveal');

    if (!targets.length) {
        return;
    }

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        targets.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                entry.target.classList.toggle('is-visible', entry.isIntersecting);
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -8% 0px' }
    );

    targets.forEach((el) => observer.observe(el));
}

document.addEventListener('DOMContentLoaded', () => {
    initMobileNav();
    initActiveSectionTracking();
    initThemeToggle();
    initHeaderScrollEdge();
    initScrollReveal();
});
