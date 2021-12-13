<button type="{{ $type ?? 'submit' }}" {{ $attributes->merge(['class' => 'btn btn-'.($variant ?? 'primary')]) }}>
    {{ $slot }}
</button>
