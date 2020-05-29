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
    return view('home');
});

Route::get('/challenges', function () {
    return view('challenges');
});

Route::match(['get', 'post'],'/maisons', function () {
    return view('houses');
});

Route::get('/login', function () {
    return view('login');
});

Route::match(['get', 'post'],'/historique', function () {
    return view('historique');
});

Route::match(['get', 'post'],'/classements', function () {
    return view('rankings');
});

Route::get('/regles', function () {
    return view('rules');
});

Route::get('/utilisateur', function () {
    return view('user');
});

Route::get('/quizz', function () {
    return view('quizz');
});

Route::match(['get', 'post'],'/ajout', function () {
    return view('addingPoints');
});
