@props([
    'title' => config('portfolio.profile.name').' | BSIT Graduate & Web Developer Portfolio',
    'description' => 'Portfolio of '.config('portfolio.profile.name').', a BSIT graduate from the Philippines specializing in web development, full stack development, and related IT technologies.',
])
<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#15171b" media="(prefers-color-scheme: dark)">

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">

    {{-- Set the theme before first paint so there's no flash of the wrong color scheme. --}}
    <script>
        (function () {
            try {
                var stored = localStorage.getItem('theme');
                var prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                if (stored === 'dark' || (!stored && prefersDark)) {
                    document.documentElement.classList.add('dark');
                }
            } catch (e) {}
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- No JS → the scroll-reveal observer never runs, so sections must stay visible. --}}
    <noscript>
        <style>.reveal { opacity: 1 !important; transform: none !important; }</style>
    </noscript>
</head>
<body class="bg-paper text-ink">

    @include('portfolio.partials.nav')

    <main>
        {{ $slot }}
    </main>

    @include('portfolio.partials.footer')

</body>
</html>
