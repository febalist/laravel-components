@aware(['model' => null])
@props(['value' => $getValue($model)])

<div class="custom-control custom-checkbox {{ $class }}">
    <input type="hidden" name="{{ $name }}" value="0">
    <input type="checkbox" name="{{ $name }}" value="1" {{ $value ? 'checked' : '' }}
    class="custom-control-input" id="{{ $id }}"
        {{ $attributes
        ->merge($defaultAttributes)
        ->merge(['class' => $errors->has($name) ? 'is-invalid' : '']) }}>
    <label class="custom-control-label" for="{{ $id }}">{{ $slot }} {{ $value ? 1 : 0 }}</label>
</div>
