<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-3 px-4 text-white text-center bg-orange-500 font-semibold hover:bg-orange-400 focus:outline-none shadow-none hover:shadow-md transition-all duration-300 ease-in-out']) }}>
    {{ $slot }}
</button>