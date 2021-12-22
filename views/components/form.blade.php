<form method="{{ $method === 'GET' ? 'GET' : 'POST' }}" action="{{ $action }}"
    {{ $attributes->merge(['enctype' => 'multipart/form-data']) }}>

    @if($method !== 'GET')
        @method($method)
        @csrf
    @endif

    {{ $slot }}
</form>
