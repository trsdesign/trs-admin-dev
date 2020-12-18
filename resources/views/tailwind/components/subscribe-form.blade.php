<form method="POST" {{ $attributes->merge(['class' => 'flex flex-row']) }}>
    @csrf

    <input type="email" class="flex-1 rounded-l border-gray-400" placeholder="Your email address" required>

    <x-trs-button class="flex-none inline-flex rounded-r border-none">
        Subscribe
    </x-trs-button>
</form>
