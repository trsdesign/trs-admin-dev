@props(['target'])

<div class="max-w-6xl mx-auto relative bg-orange-500 text-white rounded-2xl shadow-lg overflow-hidden py-16">
    <div class="relative text-center m-0 mx-auto px-6">
        <h2 class="font-bold text-4xl tracking-tight">
            {{ $heading }}
        </h2>

        <p class="text-2xl tracking-tight opacity-80 m-0">
            {{ $blurb }}
        </p>

        <div class="mt-8">
            <a href="{{ $target }}" class="w-auto inline-block items-center justify-center leading-5 font-semibold border border-transparent shadow rounded bg-white hover:opacity-90 transform hover:-translate-y-1 px-6 py-3 no-underline text-orange-500 transition-all duration-200 ease">
                {{ $cta }}
            </a>
        </div>
    </div>
</div>