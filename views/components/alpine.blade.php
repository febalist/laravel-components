<{{ $tag ?? 'div' }} x-data="{{ Js::from($data) }}" {{ $attributes }}>
{{ $slot }}
</{{ $tag ?? 'div' }}>
