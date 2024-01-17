<div class="mt-8">
    <a href="{{ route('movies.show', $movie['_id']) }}">
        <img src="{{ $movie['backdrop_path'] }}" alt="parasite"
            class="hover:opacity-75 transition ease-in-out duration-200">
    </a>
    <div class="mt-2">
        <a href="{{ route('movies.show', $movie['_id']) }}"
            class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 fill-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
            </svg>

            <span class="ml-1">%</span>
            <span class="mx-2">|</span>
            <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach ($movie['genres'] as $genre)
            <span>{{ $genre }} </span> @if (!$loop->last) , @endif

            @endforeach
            {{-- Action, Thriller, Comedy --}}
        </div>
    </div>
</div>
