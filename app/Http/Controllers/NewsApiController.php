<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NewsApiController extends Controller
{
    public function news_data()
    {
        $news_url = file_get_contents('https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=e67e3f52a34d4b3a890051c783485533');
        $articles_array = json_decode($news_url, true);
        $articles = $articles_array['articles'];
        // return view('pages.news',['articles'=> $articles]);
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
