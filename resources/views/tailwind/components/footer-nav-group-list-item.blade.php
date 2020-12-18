@props(['href'])

<li>
    <a class="flex w-full opacity-50 hover:opacity-100 leading-6 font-normal bg-transparent py-1 transition-all duration-150 ease-linear" href="{{ $href }}">{{ $slot }}</a>
</li>
