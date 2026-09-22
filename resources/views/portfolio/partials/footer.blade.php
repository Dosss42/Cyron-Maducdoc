<footer class="border-t border-line">
    <div class="mx-auto max-w-6xl px-4 py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col items-start justify-between gap-6 sm:flex-row sm:items-center">
            <div>
                <p class="text-sm font-semibold text-ink">{{ config('portfolio.profile.name') }}</p>
                <p class="text-sm text-muted">{{ config('portfolio.profile.title') }}</p>
            </div>

            <div class="flex items-center gap-5 text-sm">
                <a href="{{ config('portfolio.profile.github') }}" target="_blank" rel="noopener noreferrer" class="text-muted hover:text-ink">GitHub</a>
                <a href="{{ config('portfolio.profile.linkedin') }}" target="_blank" rel="noopener noreferrer" class="text-muted hover:text-ink">LinkedIn</a>
                <a href="mailto:{{ config('portfolio.profile.email') }}" class="text-muted hover:text-ink">Email</a>
            </div>
        </div>

        <p class="mt-8 border-t border-line pt-6 text-xs text-muted">
            &copy; {{ now()->year }} {{ config('portfolio.profile.name') }}. All rights reserved.
        </p>
    </div>
</footer>
