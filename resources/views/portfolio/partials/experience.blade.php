<section id="experience" class="scroll-mt-20 border-b border-line">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <p class="section-label">Practical Experience</p>
        <h2 class="mt-3 text-3xl font-semibold tracking-tight text-ink">Practical Experience</h2>
        <p class="mt-3 max-w-2xl text-base text-muted">
            I don't have a professional employment history yet — here's where my experience actually comes from.
        </p>

        <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2">
            @foreach (config('portfolio.practical_experience') as $item)
                <div class="card p-6">
                    <h3 class="text-sm font-semibold text-ink">{{ $item['title'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-muted">{{ $item['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
