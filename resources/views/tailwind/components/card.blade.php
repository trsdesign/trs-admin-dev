<div {{ $attributes->merge(['class' => 'bg-white mt-6 p-12 overflow-hidden shadow-md'])}}>
    <x-trs-card-title>
        {{ $title }}
    </x-trs-card-title>

    {{ $content }}
</div>