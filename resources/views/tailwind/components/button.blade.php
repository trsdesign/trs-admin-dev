<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-yellow-500 hover:shadow-none transition-all duration-300 ease-in-out']) }}>
    {{ $slot }}
</button>