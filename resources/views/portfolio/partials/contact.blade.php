@php($profile = config('portfolio.profile'))

<section id="contact" class="scroll-mt-20 bg-paper-soft">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <p class="section-label">Contact</p>
        <h2 class="mt-3 text-3xl font-semibold tracking-tight text-ink">Let's Connect</h2>
        <p class="mt-3 max-w-2xl text-base text-muted">
            I'm currently looking for my first professional opportunity in the IT industry. If you're hiring for an entry-level developer or IT position, I'd be happy to connect.
        </p>

        <div class="mt-10 grid grid-cols-1 gap-10 lg:grid-cols-5">
            <div class="lg:col-span-2">
                <dl class="space-y-5">
                    <div>
                        <dt class="text-xs font-medium uppercase tracking-wide text-muted">Email</dt>
                        <dd class="mt-1 text-sm font-medium text-ink">
                            <a href="mailto:{{ $profile['email'] }}" class="hover:text-accent">{{ $profile['email'] }}</a>
                        </dd>
                    </div>
                    <div>
                        <dt class="text-xs font-medium uppercase tracking-wide text-muted">Phone</dt>
                        <dd class="mt-1 text-sm font-medium text-ink">{{ $profile['phone'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-medium uppercase tracking-wide text-muted">Location</dt>
                        <dd class="mt-1 text-sm font-medium text-ink">{{ $profile['location'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-medium uppercase tracking-wide text-muted">GitHub</dt>
                        <dd class="mt-1 text-sm font-medium text-ink">
                            <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-accent">{{ $profile['github'] }}</a>
                        </dd>
                    </div>
                    <div>
                        <dt class="text-xs font-medium uppercase tracking-wide text-muted">LinkedIn</dt>
                        <dd class="mt-1 text-sm font-medium text-ink">
                            <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-accent">{{ $profile['linkedin'] }}</a>
                        </dd>
                    </div>
                </dl>
            </div>

            <div class="lg:col-span-3">
                <div class="card p-6 sm:p-8">
                    @if (session('contactStatus'))
                        <div class="mb-6 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                            {{ session('contactStatus') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}" class="space-y-5">
                        @csrf

                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                            <div>
                                <label for="name" class="block text-sm font-medium text-ink">Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                    class="mt-1.5 block w-full rounded-md border border-line bg-paper px-3 py-2 text-sm text-ink placeholder:text-muted focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent">
                                @error('name')
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-ink">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                    class="mt-1.5 block w-full rounded-md border border-line bg-paper px-3 py-2 text-sm text-ink placeholder:text-muted focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent">
                                @error('email')
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-ink">Subject</label>
                            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required
                                class="mt-1.5 block w-full rounded-md border border-line bg-paper px-3 py-2 text-sm text-ink placeholder:text-muted focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent">
                            @error('subject')
                                <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-ink">Message</label>
                            <textarea name="message" id="message" rows="5" required
                                class="mt-1.5 block w-full rounded-md border border-line bg-paper px-3 py-2 text-sm text-ink placeholder:text-muted focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
