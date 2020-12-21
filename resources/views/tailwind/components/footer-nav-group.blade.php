@props(['title', 'content'])

<div class="px-3 mb-4">
    <x-trs-footer-nav-group-heading>
        {{ $title }}
    </x-trs-footer-nav-group-heading>

    {{ $content }}
</div>
