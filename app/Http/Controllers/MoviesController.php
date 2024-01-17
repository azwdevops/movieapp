<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
        $moviesList = Http::withHeaders([
            "X-RapidAPI-Key" => config('services.rapidapi.api_key'),
            "X-RapidAPI-Host" => config('services.rapidapi.host'),
        ])->get(config('services.rapidapi.movies_url') . '/movies')->json()['movies'];

        return view('index', [
            'popularMovies' => array_slice($moviesList, 0, 10),
            "nowPlaying" => array_slice($moviesList, 11, 20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
        $movie = Http::withHeaders([
            "X-RapidAPI-Key" => config('services.rapidapi.api_key'),
            "X-RapidAPI-Host" => config('services.rapidapi.host'),
        ])->get(config('services.rapidapi.movies_url') . '/movie/' . $id)->json('movie');

        return view('show', [
            "movieDetails" => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
