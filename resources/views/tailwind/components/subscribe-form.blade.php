<form method="POST" {{ $attributes->merge(['class' => 'flex flex-row']) }}>
    @csrf

    <input type="email" class="flex-1 rounded-l border-gray-400" placeholder="Your email address" required>

    <button class="flex-none inline-flex py-3 px-6 bg-gray-900 hover:bg-gray-700 text-white font-semibold w-auto leading-6 transition-all duration-200 ease rounded-r border-none">Subscribe</button>
</form>
