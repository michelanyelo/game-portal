@props(['name', 'date'])

<div class="game flex">
    <div class="ml-4">
        <a href="#" class="hover:text-gray-300"> {{$name}}</a>
        <div class="text-gray-400">{{\Carbon\Carbon::createFromTimestamp($date, 'America/Santiago')->format('d/m/y')}}</div>
    </div>
</div>
