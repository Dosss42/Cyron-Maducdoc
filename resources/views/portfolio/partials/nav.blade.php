@php
    $navLinks = [
        '#home' => 'Home',
        '#about' => 'About',
        '#skills' => 'Skills',
        '#projects' => 'Projects',
        '#certifications' => 'Certifications',
        '#education' => 'Education',
        '#resume' => 'Resume',
        '#contact' => 'Contact',
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-line bg-paper/95 backdrop-blur supports-[backdrop-filter]:bg-paper/80">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <a href="#home" class="text-base font-semibold text-ink">
            {{ config('portfolio.profile.name') }}
        </a>

        <nav class="hidden items-center gap-6 md:flex" aria-label="Primary">
            @foreach ($navLinks as $href => $label)
                <a href="{{ $href }}" class="nav-link" data-nav-link>{{ $label }}</a>
            @endforeach
        </nav>

        <div class="flex items-center gap-2">
            <button
                id="theme-toggle"
                type="button"
                class="inline-flex items-center justify-center rounded-md border border-line p-2 text-ink hover:border-ink"
                aria-label="Toggle dark mode"
                aria-pressed="false"
            >
                <svg id="theme-toggle-icon-sun" class="hidden size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1.5M12 19.5V21M4.219 4.219l1.06 1.06M18.72 18.72l1.06 1.06M3 12h1.5M19.5 12H21M4.219 19.781l1.06-1.06M18.72 5.28l1.06-1.06M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
                </svg>
                <svg id="theme-toggle-icon-moon" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z" />
                </svg>
            </button>

            <div class="hidden md:block">
                <a href="{{ asset(config('portfolio.profile.resume_path')) }}" download class="btn-primary">
                    Download Resume
                </a>
            </div>

            <button
                id="nav-toggle"
                type="button"
                class="inline-flex items-center justify-center rounded-md border border-line p-2 text-ink md:hidden"
                aria-label="Toggle navigation menu"
                aria-expanded="false"
                aria-controls="mobile-nav"
            >
                <svg id="nav-toggle-icon-open" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
                </svg>
                <svg id="nav-toggle-icon-close" class="hidden size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-nav" class="hidden border-t border-line bg-paper px-4 pb-4 md:hidden" aria-label="Mobile">
        <nav class="flex flex-col gap-1 pt-2">
            @foreach ($navLinks as $href => $label)
                <a href="{{ $href }}" class="rounded-md px-2 py-2.5 text-sm font-medium text-muted hover:bg-paper-soft hover:text-ink" data-nav-link data-mobile-nav-link>
                    {{ $label }}
                </a>
            @endforeach
        </nav>
        <a href="{{ asset(config('portfolio.profile.resume_path')) }}" download class="btn-primary mt-3 w-full">
            Download Resume
        </a>
    </div>
</header>
