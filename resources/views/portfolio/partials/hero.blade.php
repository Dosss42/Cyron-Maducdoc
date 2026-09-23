@php($hero = config('portfolio.hero'))

<section id="home" class="reveal scroll-mt-20 border-b border-line">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
        <p class="section-label">{{ $hero['label'] }}</p>

        <h1 class="text-display mt-4 max-w-3xl text-ink">
            {{ $hero['heading'] }}
        </h1>

        <p class="text-h2 mt-3 max-w-2xl text-muted">
            {{ $hero['subheading'] }}
        </p>

        <p class="mt-6 max-w-2xl text-base leading-relaxed text-muted">
            {{ $hero['description'] }}
        </p>

        <div class="mt-8 flex flex-wrap items-center gap-3">
            <a href="#projects" class="btn-primary">View My Projects</a>
            <a href="{{ asset(config('portfolio.profile.resume_path')) }}" download class="btn-secondary">Download Resume</a>
        </div>

        <p class="mt-8 inline-flex items-center gap-2 text-sm text-muted">
            <span class="size-2 rounded-full bg-emerald-500" aria-hidden="true"></span>
            {{ config('portfolio.profile.availability') }}
        </p>
    </div>
</section>
