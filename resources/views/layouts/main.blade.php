<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>
    @vite('resources/js/app.js')
    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.13.3/dist/cdn.min.js"></script>


</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0">
                <li class="text-2xl font-bold"><a href="{{ route('movies.index') }}">Movie App</a></li>
                <li class="md:ml-16"><a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a></li>
                <li class="md:ml-6"><a href="#" class="hover:text-gray-300">TV Shows</a></li>
                <li class="md:ml-6"><a href="#" class="hover:text-gray-300">Actors</a></li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                @livewire('search-dropdown')
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    @livewireScripts

</body>

</html>
