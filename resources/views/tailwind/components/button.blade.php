<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex py-3 mt-6 tracking-widest text-white text-center bg-black hover:bg-yellow-500 focus:outline-none shadow-lg hover:shadow-none transition-all duration-300 ease-in-out']) }}>
    {{ $slot }}
</button>