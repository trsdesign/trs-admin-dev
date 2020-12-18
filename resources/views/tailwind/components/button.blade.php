<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blade font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-500 focus:outline-none focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-300']) }}>
    {{ $slot }}
</button>