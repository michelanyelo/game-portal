@props(['name', 'cover', 'platforms', 'rating', 'summary'])

<div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
    <div class="relative flex-none">
        <a href="#">
            <img src="{{$cover}}"
                 alt="Cover for {{$name}}"
                 class="w-20 lg:w-48 hover:opacity-75 transition ease-in-out duration-150">
        </a>
    </div>

    <div class="ml-6 lg:ml-12">
        <a href="#"
           class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
            {{$name}}
        </a>
        <div class="text-gray-400 mt-1">
            @foreach($platforms as $platform)
                {{$platform['abbreviation'] ?? null}}
            @endforeach
        </div>
        <p class="mt-6 text-gray-400 hidden lg:block">
            {{$summary}}
        </p>
    </div>
</div>
