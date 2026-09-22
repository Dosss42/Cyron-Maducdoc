<section id="education" class="scroll-mt-20 border-b border-line bg-paper-soft">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <p class="section-label">Education</p>
        <h2 class="mt-3 text-3xl font-semibold tracking-tight text-ink">Education</h2>

        @foreach (config('portfolio.education') as $entry)
            <div class="card mt-8 p-6 sm:p-8">
                <div class="flex flex-col justify-between gap-2 sm:flex-row sm:items-start">
                    <div>
                        <h3 class="text-lg font-semibold text-ink">{{ $entry['degree'] }}</h3>
                        <p class="text-sm text-muted">{{ $entry['school'] }} &middot; {{ $entry['location'] }}</p>
                    </div>
                    <span class="badge shrink-0">Graduated {{ $entry['graduation'] }}</span>
                </div>

                <p class="mt-4 text-sm text-muted">
                    <span class="font-medium text-ink">Focus:</span> {{ $entry['focus'] }}
                </p>

                <div class="mt-4 flex flex-wrap gap-1.5">
                    @foreach ($entry['areas'] as $area)
                        <span class="badge">{{ $area }}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>
