@if($date)
    <x-date :date="$date"/>
    {{ $slot }}
    <x-time :date="$date"/>
@endif
