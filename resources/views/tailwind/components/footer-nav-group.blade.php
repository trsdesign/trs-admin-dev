@props(['title', 'content'])

<div class="px-3 mb-4">
    <x-footer-nav-group-heading>
        {{ $title }}
    </x-footer-nav-group-heading>

    {{ $content }}
</div>
