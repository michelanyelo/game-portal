@props(['name', 'cover', 'platforms', 'rating'])

<div class="game mt-8">
    <div class="relative inline-block">
        <a href="#">
            <img src="{{$cover}}" alt="Cover for {{$name}}"
                 class="hover:opacity-75 transition ease-in-out duration-150">
        </a>

        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
             style="right: -20px; bottom: -20px;">
            <div class="font-semibold text-xs flex justify-center items-center h-full">
                {{@round($rating)}}%
            </div>
        </div>
    </div>

    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
        {{$name}}
    </a>
    <div class="text-gray-400 mt-1">
        @foreach($platforms as $platform)
            {{$platform['abbreviation'] ?? null}}
        @endforeach
    </div>
</div>
