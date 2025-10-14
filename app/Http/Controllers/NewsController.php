<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
        public function index()
    {
        $response = Http::get('https://gnews.io/api/v4/top-headlines', [
            'token' => config('services.gnews.key'),
            'lang'  => 'en',
            'max'   => 12,
        ]);

        $articles = $response->json('articles', []);
        // dd( $articles);
        return view('home', compact('articles'));

    }
}
