<div class="w-full flex bg-white border border-gray-200 rounded overflow-hidden shadow items-center">
    <div class="w-2/5">
        {{ $media }}
    </div>

    <div class="w-3/5 p-8 box-border">
        <h4 class="font-bold tracking-wide text-xl">
            {{ $slot }}
        </h4>
    </div>
</div>