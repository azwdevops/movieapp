<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component {
    public $search = '';

    public function render() {

        $searchResults = [];
        if (strlen($this->search) > 2) {

            $searchResults = Http::withHeaders([
                "X-RapidAPI-Key" => config('services.rapidapi.api_key'),
                "X-RapidAPI-Host" => config('services.rapidapi.host'),
            ])->get(config('services.rapidapi.movies_url') . '/search?query=' . $this->search)->json()['contents'];
        }

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7)
        ]);
    }
}
