<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" x-ref="search" id='search' type="text"
        class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8" placeholder="search" />

    <div wire:loading class="spinner"></div>

    @if (strlen($search) > 2){

    <div class="absolute bg-gray-800 rounded w-64 mt-4 text-sm">
        @if ($searchResults->count() > 0){
        <ul>
            @foreach ($searchResults as $result)
            <li class="border border-gray-700">
                <a href="{{ route('movies.show', $result['_id']) }}" class="hover:bg-gray-700 p-3 flex items-center">
                    <img src="{{ $result['poster_path'] }}" alt="" class="w-8">
                    <span>{{ $result['title'] }}
                    </span>
                </a>
            </li>
            @endforeach

        </ul>
        } @else {
        <div class="px-3 py-3">No results for "{{ $search }}"</div>
        }

        @endif
    </div>
    }

    @endif
</div>
