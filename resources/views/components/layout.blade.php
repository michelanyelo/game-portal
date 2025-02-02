<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracasts Video Game</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex  flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/">
                    <img src="/primary-logo.svg" alt="laracasts video game store" class="w-32 flex-none">
                </a>
                <ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Cooming soon</a></li>
                </ul>
            </div>

            <div class="flex items-center mt-6 lg:mt-0">
                <div class="relative">
                    <input type="text"
                        class="bg-gray-800 text-sm rounded-full focus:outline-none focus:shadow-outline w-64 px-3 py-1 pl-8"
                        placeholder="Buscar...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-5-5">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-6">
                    <a href="#">
                        <img src="https://assets.laracasts.com/images/mascot/larywink.svg" alt="avatar"
                            class="rounded-full w-8">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-gray-400 py-8">
        <div class="container mx-auto px-4 py-6">
            Hecho por <a href="#" class="underline hover:text-gray-300">michelanyelo.dev</a>
        </div>
    </footer>
</body>

</html>
