<div {{ $attributes->merge(['class' => 'bg-white p-12 border border-gray-100 rounded overflow-hidden shadow-md hover:shadow-lg transition-all duration-150 ease-in-out'])}}>
    <x-trs-card-title>
        {{ $title }}
    </x-trs-card-title>

    {{ $content }}
</div>
