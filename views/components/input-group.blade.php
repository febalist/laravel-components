<div {{ $attributes->merge(['class' => 'input-group']) }}>
  @if(isset($prepend) || isset($prefix))
    <div class="input-group-prepend">
      @if($prefix)
        <span class="input-group-text">{{ $prefix }}</span>
      @else
        {{ $prepend }}
      @endif
    </div>
  @endif

  {{ $slot }}

  @if(isset($append) || isset($suffix))
    <div class="input-group-append">
      @if($suffix)
        <span class="input-group-text">{{ $suffix }}</span>
      @else
        {{ $append }}
      @endif
    </div>
  @endif
</div>
