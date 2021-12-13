@error($name)
<div {{ $attributes->merge(['class' => 'invalid-feedback']) }}>
    @if($slot->isEmpty())
        {{ $message }}
    @else
        {{ $slot }}
    @endif
</div>
@enderror
