<section id="job-target" class="scroll-mt-20 border-b border-line">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <p class="section-label">Job Target</p>
        <h2 class="mt-3 text-3xl font-semibold tracking-tight text-ink">What I'm Looking For</h2>
        <p class="mt-3 max-w-2xl text-base text-muted">
            Web development is my preferred direction, but I'm open to related entry-level IT opportunities.
        </p>

        <div class="mt-8 grid grid-cols-1 gap-8 sm:grid-cols-2">
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wide text-ink">Primary Roles</h3>
                <div class="mt-3 flex flex-wrap gap-2">
                    @foreach (config('portfolio.job_target.primary') as $role)
                        <span class="badge-accent">{{ $role }}</span>
                    @endforeach
                </div>
            </div>

            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wide text-ink">Also Open To</h3>
                <div class="mt-3 flex flex-wrap gap-2">
                    @foreach (config('portfolio.job_target.secondary') as $role)
                        <span class="badge">{{ $role }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-12 border-t border-line pt-8">
            <h3 class="text-sm font-semibold uppercase tracking-wide text-ink">Soft Skills</h3>
            <div class="mt-3 flex flex-wrap gap-2">
                @foreach (config('portfolio.soft_skills') as $skill)
                    <span class="badge">{{ $skill }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>
