<x-layout :title="$project['name'].' | '.config('portfolio.profile.name')" :description="$project['description']">

    <section class="border-b border-line">
        <div class="mx-auto max-w-4xl px-4 py-12 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}#projects" class="text-sm font-medium text-muted transition-colors hover:text-ink active:opacity-60">
                &larr; Back to Projects
            </a>

            <div class="mt-6 flex flex-wrap items-center gap-2">
                <span class="badge-accent">{{ $project['type'] }}</span>
                <span class="text-xs text-muted">{{ $project['role'] }}</span>
            </div>

            <h1 class="text-display-sm mt-3 text-ink">{{ $project['name'] }}</h1>
            <p class="mt-3 max-w-2xl text-base leading-relaxed text-muted">{{ $project['description'] }}</p>

            <div class="mt-5 flex flex-wrap gap-1.5">
                @foreach ($project['technologies'] as $tech)
                    <span class="badge">{{ $tech }}</span>
                @endforeach
            </div>

            <div class="mt-6 flex flex-wrap gap-3">
                @if ($project['links']['live_demo'])
                    <a href="{{ $project['links']['live_demo'] }}" target="_blank" rel="noopener noreferrer" class="btn-primary">Live Demo</a>
                @endif
                @if ($project['links']['github'])
                    <a href="{{ $project['links']['github'] }}" target="_blank" rel="noopener noreferrer" class="btn-secondary">GitHub</a>
                @endif
                @if ($project['links']['documentation'])
                    <a href="{{ $project['links']['documentation'] }}" target="_blank" rel="noopener noreferrer" class="btn-secondary">Documentation</a>
                @endif
            </div>
        </div>
    </section>

    <section class="border-b border-line bg-paper-soft">
        <div class="mx-auto max-w-4xl px-4 py-10 sm:px-6 lg:px-8">
            <x-project-thumb :project="$project" />
        </div>
    </section>

    <section>
        <div class="mx-auto max-w-4xl px-4 py-14 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2">
                <div>
                    <h2 class="text-sm font-semibold uppercase tracking-wide text-ink">Overview</h2>
                    <p class="mt-2 text-sm leading-relaxed text-muted">{{ $project['overview'] }}</p>
                </div>

                <div>
                    <h2 class="text-sm font-semibold uppercase tracking-wide text-ink">Problem</h2>
                    <p class="mt-2 text-sm leading-relaxed text-muted">{{ $project['problem'] }}</p>
                </div>

                <div>
                    <h2 class="text-sm font-semibold uppercase tracking-wide text-ink">Solution</h2>
                    <p class="mt-2 text-sm leading-relaxed text-muted">{{ $project['solution'] }}</p>
                </div>

                <div>
                    <h2 class="text-sm font-semibold uppercase tracking-wide text-ink">My Contribution</h2>
                    <p class="mt-2 text-sm leading-relaxed text-muted">{{ $project['contribution'] }}</p>
                </div>

                <div>
                    <h2 class="text-sm font-semibold uppercase tracking-wide text-ink">Challenges</h2>
                    <p class="mt-2 text-sm leading-relaxed text-muted">{{ $project['challenges'] }}</p>
                </div>

                <div>
                    <h2 class="text-sm font-semibold uppercase tracking-wide text-ink">What I Learned</h2>
                    <p class="mt-2 text-sm leading-relaxed text-muted">{{ $project['learned'] }}</p>
                </div>
            </div>

            <div class="mt-10 border-t border-line pt-8">
                <h2 class="text-sm font-semibold uppercase tracking-wide text-ink">Features</h2>
                <ul class="mt-3 grid grid-cols-1 gap-x-8 gap-y-2 sm:grid-cols-2">
                    @foreach ($project['features'] as $feature)
                        <li class="flex items-start gap-2 text-sm text-muted">
                            <span class="mt-1.5 size-1 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-10 border-t border-line pt-8">
                <h2 class="text-sm font-semibold uppercase tracking-wide text-ink">Technologies</h2>
                <div class="mt-3 flex flex-wrap gap-1.5">
                    @foreach ($project['technologies'] as $tech)
                        <span class="badge">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</x-layout>
