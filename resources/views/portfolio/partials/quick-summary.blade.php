<section class="border-b border-line bg-paper-soft" aria-label="What I bring">
    <div class="mx-auto max-w-6xl px-4 py-14 sm:px-6 lg:px-8">
        <h2 class="text-lg font-semibold text-ink">What I Bring</h2>

        <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach (config('portfolio.quick_summary') as $item)
                <div>
                    <h3 class="text-sm font-semibold text-ink">{{ $item['title'] }}</h3>
                    <p class="mt-1.5 text-sm leading-relaxed text-muted">{{ $item['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
