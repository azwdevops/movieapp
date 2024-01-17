@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="{{ $movieDetails['poster_path'] }}" alt="parasite" class="md:w-[24rem]">
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">{{ $movieDetails['title'] }}</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4 fill-orange-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <span class="ml-1">{{ $movieDetails['vote_average'] * 10 }}%</span>
                <span class="mx-2">|</span>
                <span>{{\Carbon\Carbon::parse($movieDetails['release_date'])->format('M d, Y') }}</span>
                <span class="mx-2">|</span>
                @foreach ($movieDetails['genres'] as $genre)
                <span>{{ $genre }} </span> @if (!$loop->last) , @endif

                @endforeach
            </div>
            <p class="text-gray-300 mt-8">
                {{ $movieDetails['overview'] }}
            </p>
            <div class="mt-12">
                <h4 class="text-white font-semibold ">Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div>John Doe</div>
                        <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                    </div>
                    <div class="ml-8">
                        <div>Jane Doe</div>
                        <div class="text-sm text-gray-400">Screen Play</div>
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <a href="{{ $movieDetails['youtube_trailer'] }}" target="__blank"
                    class="flex items-center max-w-fit bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                    </svg>
                    <span class="ml-2">Play
                        Trailer</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="mt-8 flex flex-col">
                <img src="{{ $movieDetails['poster_path'] }}" alt="parasite"
                    class="hover:opacity-75 transition ease-in-out duration-200" />
                <span class="mt-4 font-bold">Cast Name</span>
                <span>Real Name Name</span>
            </div>
        </div>
    </div>
</div>

<div class="movie-images border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="{{ $movieDetails['poster_path'] }}" alt="parasite"
                        class="hover:opacity-75 transition ease-in-out duration-200">
                </a>
            </div>

        </div>
    </div>
</div>


@endsection
