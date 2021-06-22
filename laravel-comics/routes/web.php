<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $comicsData = config("comics");

    $comicsView = [
        "comicsList" => $comicsData
    ];
    return view('welcome', $comicsView);
})->name("home-page");

Route::get('/characters', function () {
    return view("characters");
})->name("characters-page");

Route::get('/comic/{index}', function ($index) {
    $comicsData = config("comics");

    if (!is_numeric($index) || $index < 0 || $index > count($comicsData) -1) {
        abort(404, "Prodotto inesistente");
    }

    $userChoice = $comicsData[intval($index)];

    return view("comics", [
        "product" => $userChoice
    ]);
})->name("comics-page");

Route::get('/movies', function () {
    return view("movies");
})->name("movies-page");

Route::get('/tv', function () {
    return view("tv");
})->name("tv-page");

Route::get('/games', function () {
    return view("games");
})->name("games-page");

Route::get('/collectibles', function () {
    return view("collectibles");
})->name("collectibles-page");

Route::get('/videos', function () {
    return view("videos");
})->name("videos-page");

Route::get('/fans', function () {
    return view("fans");
})->name("fans-page");

Route::get('/news', function () {
    return view("news");
})->name("news-page");

Route::get('/shop', function () {
    return view("shop");
})->name("shop-page");
