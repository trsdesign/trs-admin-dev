<div class="m-0 p-0 border-none">
    <div class="h-16 w-16 mb-4 mr-auto">
        {{ $image }}
    </div>

    <div class="block">
        <h4 class="font-bold text-xl">
            {{ $heading }}
        </h4>
    </div>

    <p class="leading-6 opacity-70 mb-4">
        {{ $blurb }}
    </p>

    @isset($link)
        <a class="text-orange-500 hover:text-orange-400 transition-color duration-150 ease-in-out font-bold" href="#">
            {{ $link }}
        </a>
    @endisset
</div>