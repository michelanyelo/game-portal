<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{

    public function index()
    {
        $popularGames = Cache::remember('popular-games', 1, function () {
            return Http::withHeaders([
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer ' . env('IGDB_ACCESS_TOKEN')
            ])->withBody(
                "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug;
            where platforms = (48,49,130,6)
            & rating > 90
            & total_rating_count > 1000
            & cover != null
            & first_release_date != null;
            sort rating desc;
            limit 12;",
                "text/plain"
            )->post('https://api.igdb.com/v4/games')->json();
        });

        return view('welcome', [
            'popularGames' => $popularGames
        ]);
    }
}
