<section id="process" class="reveal scroll-mt-20 border-b border-line bg-paper-soft">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <p class="section-label">Process</p>
        <h2 class="text-h1 mt-3 text-ink">How I Build</h2>
        <p class="mt-3 max-w-2xl text-base text-muted">
            The process I follow on most projects, from academic assignments to personal builds.
        </p>

        <ol class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-5">
            @foreach (config('portfolio.process') as $item)
                <li class="card p-5">
                    <span class="text-xs font-semibold text-accent">Step {{ $loop->iteration }}</span>
                    <h3 class="text-h3 mt-2 text-ink">{{ $item['step'] }}</h3>
                    <p class="mt-1.5 text-sm leading-relaxed text-muted">{{ $item['description'] }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
