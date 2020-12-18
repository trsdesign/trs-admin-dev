<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-3 px-4 text-white text-center bg-yellow-500 font-semibold hover:bg-yellow-400 focus:outline-none shadow-lg hover:shadow-none transition-all duration-300 ease-in-out']) }}>
    {{ $slot }}
</button>