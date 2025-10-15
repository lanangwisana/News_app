<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
        public function index()
    {
        // $response = Http::get('https://gnews.io/api/v4/top-headlines', [
        //     'token' => config('services.gnews.key'),
        //     'lang'  => 'en',
        //     'max'   => 12,
        // ]);

        $response = Http::get('https://newsdata.io/api/1/latest', [
            'apikey' => config('services.newsdata.key'),
            'language'  => 'en',
        ]);


        $articles = $response->json('results', []);
        // dd( $articles);
        return view('home', compact('articles'));

    }
}
