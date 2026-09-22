<section id="about" class="scroll-mt-20 border-b border-line">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-3">
            <div>
                <p class="section-label">About</p>
                <h2 class="mt-3 text-3xl font-semibold tracking-tight text-ink">About Me</h2>
            </div>

            <div class="lg:col-span-2">
                @foreach (config('portfolio.about') as $paragraph)
                    <p class="max-w-2xl text-base leading-relaxed text-muted {{ ! $loop->first ? 'mt-4' : '' }}">
                        {{ $paragraph }}
                    </p>
                @endforeach

                <dl class="mt-8 grid grid-cols-2 gap-6 sm:grid-cols-3">
                    <div>
                        <dt class="text-xs font-medium uppercase tracking-wide text-muted">Career Level</dt>
                        <dd class="mt-1 text-sm font-medium text-ink">{{ config('portfolio.profile.career_level') }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-medium uppercase tracking-wide text-muted">Location</dt>
                        <dd class="mt-1 text-sm font-medium text-ink">{{ config('portfolio.profile.location') }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-medium uppercase tracking-wide text-muted">Focus</dt>
                        <dd class="mt-1 text-sm font-medium text-ink">Web Development</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</section>
