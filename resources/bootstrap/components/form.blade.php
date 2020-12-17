@props(['method', 'fields'])

<form method="{{ $method ?? 'POST' }}">
    @csrf
    
	{{ $slot }}
</form>
