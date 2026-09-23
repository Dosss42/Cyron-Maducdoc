@php
    $projects = collect(config('portfolio.projects'));
    $featured = $projects->firstWhere('featured', true);
    $others = $projects->reject(fn ($project) => $project['slug'] === ($featured['slug'] ?? null));
@endphp

<section id="projects" class="reveal scroll-mt-20 border-b border-line bg-paper-soft">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <p class="section-label">Proof of Work</p>
        <h2 class="text-h1 mt-3 text-ink">Featured Projects</h2>
        <p class="mt-3 max-w-2xl text-base text-muted">
            I don't have professional work experience yet, so these projects are the clearest way to see how I build things.
        </p>

        @if ($featured)
            <div class="card-interactive mt-10 overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <x-project-thumb :project="$featured" />

                    <div class="flex flex-col justify-center p-6 sm:p-8">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="badge-accent">{{ $featured['type'] }}</span>
                            <span class="text-xs text-muted">{{ $featured['role'] }}</span>
                        </div>

                        <h3 class="text-h2 mt-3 text-ink">{{ $featured['name'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-muted">{{ $featured['description'] }}</p>

                        <div class="mt-4 flex flex-wrap gap-1.5">
                            @foreach ($featured['technologies'] as $tech)
                                <span class="badge">{{ $tech }}</span>
                            @endforeach
                        </div>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="{{ route('projects.show', $featured['slug']) }}" class="btn-primary">View Details</a>
                            @if ($featured['links']['github'])
                                <a href="{{ $featured['links']['github'] }}" target="_blank" rel="noopener noreferrer" class="btn-secondary">GitHub</a>
                            @endif
                            @if ($featured['links']['documentation'])
                                <a href="{{ $featured['links']['documentation'] }}" target="_blank" rel="noopener noreferrer" class="btn-secondary">Documentation</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($others as $project)
                <div class="card-interactive flex flex-col overflow-hidden">
                    <x-project-thumb :project="$project" />

                    <div class="flex flex-1 flex-col p-5">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="badge">{{ $project['type'] }}</span>
                        </div>

                        <h3 class="text-h3 mt-3 text-ink">{{ $project['short_name'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-muted">{{ $project['description'] }}</p>

                        <div class="mt-3 flex flex-wrap gap-1.5">
                            @foreach ($project['technologies'] as $tech)
                                <span class="badge">{{ $tech }}</span>
                            @endforeach
                        </div>

                        <div class="mt-5 flex flex-wrap gap-2 pt-1">
                            <a href="{{ route('projects.show', $project['slug']) }}" class="btn-secondary">View Details</a>
                            @if ($project['links']['github'])
                                <a href="{{ $project['links']['github'] }}" target="_blank" rel="noopener noreferrer" class="btn-secondary">GitHub</a>
                            @endif
                            @if ($project['links']['live_demo'])
                                <a href="{{ $project['links']['live_demo'] }}" target="_blank" rel="noopener noreferrer" class="btn-secondary">Live Demo</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
