<div {{ $attributes->merge(['class' => 'card']) }}>

    @if(isset($header) || isset($header_right))
        <div class="card-header clearfix">

            @if(isset($header_right))
                <span class="float-right">
                    {{ $header_right }}
                </span>
            @endif

            {{ $header ?? null }}
        </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>

    @if($footer ?? null)
        <div class="card-footer clearfix">
            {{ $footer }}
        </div>
    @endif

</div>
