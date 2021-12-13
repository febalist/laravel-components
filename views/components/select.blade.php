@aware(['model' => null])
@props(['value' => $getValue($model)])

<select name="{{ $name }}" {{ $attributes->merge(['class' => 'custom-select']) }}>
    @foreach($options as $key => $text)
        <option value="{{ $key }}" {{ ((string) $key) === ((string) $value) ? 'selected' : '' }}>{{ $text }}</option>
    @endforeach
</select>
