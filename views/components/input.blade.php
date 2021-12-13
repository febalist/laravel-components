@aware(['model' => null])
@props(['value' => $getValue($model)])

<input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}"
    {{ $attributes
        ->merge($defaultAttributes)
        ->merge(['class' => 'form-control'.($type === 'file' ? '-file' : '').' '.($errors->has($name) ? 'is-invalid' : '')]) }}>
