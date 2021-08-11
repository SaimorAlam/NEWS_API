<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfilesController extends Controller
{
    public function list()
    {
        $data = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        return view('pages.profiles',['data' => $data]);
    }
}
