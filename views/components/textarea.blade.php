@aware(['model' => null])
@props(['value' => $getValue($model)])

<textarea name="{{ $name }}"
    {{ $attributes
        ->merge($defaultAttributes)
        ->merge(['class' => 'form-control '.($errors->has($name) ? 'is-invalid' : '')]) }}>{{ $value }}</textarea>
