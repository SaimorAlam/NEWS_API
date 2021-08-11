<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsApiController;
use App\Http\Controllers\ProfilesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** essential command 
  php artisan cache:clear
  php artisan view:clear

  php artisan route:cache
  php artisan route:clear
  
  php artisan clear-compiled
  php artisan config:cache
*/

Route::get('/', [NewsApiController::class, 'news_data'])->name('home');
Route::get('/profiles', [ProfilesController::class, 'list'])->name('list');
Route::get('/news',[NewsApiController::class, 'show_news'])->name('news');

