<section id="certifications" class="reveal scroll-mt-20 border-b border-line">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <p class="section-label">Certifications</p>
        <h2 class="text-h1 mt-3 text-ink">Certifications</h2>
        <p class="mt-3 max-w-2xl text-base text-muted">
            Certificates will appear here as I complete them — placeholders below until then.
        </p>

        <div class="mt-8 grid grid-cols-1 gap-5 sm:grid-cols-2">
            @foreach (config('portfolio.certifications') as $cert)
                <div class="card flex items-start gap-4 p-5">
                    <div class="flex size-12 shrink-0 items-center justify-center rounded-md border border-line bg-paper-soft" aria-hidden="true">
                        <svg class="size-5 text-muted" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>

                    <div class="min-w-0 flex-1">
                        <h3 class="text-h3 text-ink">{{ $cert['title'] }}</h3>
                        <p class="mt-1 text-sm text-muted">Issued by {{ $cert['organization'] }}</p>
                        <p class="text-sm text-muted">Earned {{ $cert['date'] }}</p>

                        @if ($cert['credential_id'])
                            <p class="mt-1 text-xs text-muted">Credential ID: {{ $cert['credential_id'] }}</p>
                        @endif

                        @if ($cert['verify_url'])
                            <a href="{{ $cert['verify_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-secondary mt-3">
                                Verify Certificate
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
