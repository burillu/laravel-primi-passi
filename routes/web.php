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
    $message = 'Hello Laravel!';
    $image = 'https://www.dvd.it/79761-large_default/moneyball-l-arte-di-vincere.jpg';
    $title = 'L\'arte del vincere';
    $content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus molestiae distinctio quod commodi ipsa totam eos corrupti atque ex. Facilis.';
    $custom = 'very good';
    return view('home', compact('image', 'title', 'content', 'custom'));
})->name('home');
Route::get('/books', function () {
    $message = 'Hello books';
    $image = 'https://m.media-amazon.com/images/I/61Dx6xmd6oL._SY425_.jpg';
    $title = 'Il fu Mattia Pascal';
    $content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus molestiae distinctio quod commodi ipsa totam eos corrupti atque ex. Facilis.';
    $custom = 'very good';
    return view('books', compact('image', 'title', 'content', 'custom'));
})->name('books');

