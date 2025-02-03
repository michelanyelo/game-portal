<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{

    public function index()
    {
        $current = Carbon::now()->timestamp;
        $afterFourMoths = Carbon::now()->addMonths(8)->timestamp;

        $popularGames = Cache::remember('popular-games', 1, function () {
            return Http::withHeaders([
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer ' . env('IGDB_ACCESS_TOKEN')
            ])->withBody(
                "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating;
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

        $recentlyReviewed = Cache::remember('recently-games', 1, function () use ($current) {
            return Http::withHeaders([
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer ' . env('IGDB_ACCESS_TOKEN')
            ])->withBody(
                "fields name, cover.url, first_release_date, platforms.abbreviation, rating, total_rating_count, summary;
            where platforms = (48,49,130,6)
            & first_release_date < {$current}
            & rating_count > 1000
            & cover != null
            & first_release_date != null;
            sort first_release_date desc;
            limit 3;",
                "text/plain"
            )->post('https://api.igdb.com/v4/games')->json();
        });

        $mostAnticipated = Cache::remember('anticipated-games', 1, function () use ($afterFourMoths, $current) {
            return Http::withHeaders([
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer ' . env('IGDB_ACCESS_TOKEN')
            ])->withBody(
                "fields name, first_release_date;
            where first_release_date >= $current & first_release_date <= $afterFourMoths;
            sort first_release_date desc;
            limit 12;",
                "text/plain"
            )->post('https://api.igdb.com/v4/games')->json();
        });

        return view('welcome', [
            'popularGames' => $popularGames,
            'recentlyReviewed' => $recentlyReviewed,
            'mostAnticipated' => $mostAnticipated
        ]);
    }
}
