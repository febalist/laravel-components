<form method="{{ $method === 'GET' ? 'GET' : 'POST' }}" action="{{ $action }}"
    {{ $attributes->merge(['enctype' => 'multipart/form-data']) }}>

  @method($method)

  @if($method !== 'GET')
    @csrf
  @endif

  {{ $slot }}
</form>
