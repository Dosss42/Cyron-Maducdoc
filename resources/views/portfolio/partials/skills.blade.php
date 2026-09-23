@php($learning = collect(config('portfolio.learning')))

<section id="skills" class="reveal scroll-mt-20 border-b border-line">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <p class="section-label">Skills</p>
        <h2 class="text-h1 mt-3 text-ink">Technical Skills</h2>
        <p class="mt-3 max-w-2xl text-base text-muted">
            Technologies I've used through coursework, my capstone project, and personal projects.
        </p>

        <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach (config('portfolio.skills') as $category => $items)
                <div class="card p-6">
                    <h3 class="text-h3 text-ink">{{ $category }}</h3>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($items as $skill)
                            <span class="badge">
                                {{ $skill }}
                                @if ($learning->contains($skill))
                                    <span class="ml-1.5 text-[10px] font-semibold uppercase tracking-wide text-accent">Learning</span>
                                @endif
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Development stack --}}
        <div class="mt-14">
            <h3 class="text-h3 text-ink">My Development Stack</h3>
            <p class="mt-1.5 text-sm text-muted">The technologies I reach for most, frontend and backend.</p>

            <div class="mt-5 flex flex-wrap gap-2.5">
                @foreach (config('portfolio.stack.primary') as $tech)
                    <span class="badge-accent">{{ $tech }}</span>
                @endforeach
            </div>

            <div class="mt-4 flex flex-wrap gap-2">
                @foreach (config('portfolio.stack.additional') as $tech)
                    <span class="badge">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>
