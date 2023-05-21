<?php

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', function () {
    $movies = Movie::all();
    $comments = array();
    foreach ($movies as $movie) {
        $comments[] = $movie->comments;
    }
    return view('movies', ['movies' => $movies, 'comments' => $comments]);
});

Route::get('/movies/{id}', function ($id) {
    $movie = Movie::find($id);
    $genres = $movie->genres;
    return view('movie', ['movie' => $movie, 'genres' => $genres]);
});

Route::get('/genres/{id}', function ($id) {
    $genre = Genre::find($id);
    $movies = $genre->movies;
    return view('genre', ['genre' => $genre, 'movies' => $movies]);
});
