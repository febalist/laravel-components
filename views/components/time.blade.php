@if($date)
    <span x-data="{date: new Date('{{ $date }}')}" x-text="date.toLocaleTimeString()"></span>
@endif
