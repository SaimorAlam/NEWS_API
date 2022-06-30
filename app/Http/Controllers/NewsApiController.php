<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NewsApiController extends Controller
{
    public function news_data()
    {

        $headers = [
            "Content-type: Application/json; charset=UTF-8",
            "User-Agent: " . $_SERVER['HTTP_USER_AGENT'],

        ];
        $curl_handle = curl_init();
        curl_setopt_array($curl_handle, [
            CURLOPT_URL => "https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=e67e3f52a34d4b3a890051c783485533",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
        ]);
        $data = curl_exec($curl_handle);
        curl_close($curl_handle);
        $articles_array = json_decode($data, true);
        $articles = $articles_array['articles'];
        return view('pages.index',['articles'=> $articles]);
    }
    public function show_news(Request $request)
    {
        $articles = [
            'title' => $request->input('article-title'),
            'author' => $request->input('article-author'),
            'published' => $request->input('article-published'),
            'image' => $request->input('article-image'),
            'content' => $request->input('article-content'),

        ];

        return view('pages.news', ['articles' => $articles]);
    }
}
