{{-- Simple placeholder "screenshot" — swap for a real screenshot when available. --}}
@props(['project'])

<div class="overflow-hidden rounded-t-lg border-b border-line bg-paper-soft">
    <div class="flex h-8 items-center gap-1.5 border-b border-line bg-paper px-3" aria-hidden="true">
        <span class="size-2 rounded-full bg-line"></span>
        <span class="size-2 rounded-full bg-line"></span>
        <span class="size-2 rounded-full bg-line"></span>
    </div>
    <div class="flex aspect-video flex-col items-center justify-center gap-1 px-6 text-center">
        <span class="text-sm font-semibold text-ink">{{ $project['short_name'] }}</span>
        <span class="text-xs text-muted">Screenshot coming soon</span>
    </div>
</div>
