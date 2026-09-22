<section id="resume" class="scroll-mt-20 border-b border-line bg-paper-soft">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="card flex flex-col items-start justify-between gap-6 p-8 sm:flex-row sm:items-center">
            <div>
                <p class="section-label">Resume</p>
                <h2 class="mt-3 text-2xl font-semibold tracking-tight text-ink">Resume</h2>
                <p class="mt-2 max-w-xl text-base text-muted">
                    Want to know more about my background and technical skills? You can view or download my resume.
                </p>
            </div>

            <div class="flex shrink-0 flex-wrap gap-3">
                <a href="{{ asset(config('portfolio.profile.resume_path')) }}" target="_blank" rel="noopener noreferrer" class="btn-secondary">
                    View Resume
                </a>
                <a href="{{ asset(config('portfolio.profile.resume_path')) }}" download class="btn-primary">
                    Download PDF
                </a>
            </div>
        </div>
    </div>
</section>
