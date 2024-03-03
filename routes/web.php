<?php

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


Route::get('/states', function () {
    return \App\Models\State::all();
});
Route::get('/dep', function () {
    return \App\Models\Department::all();
    // dd(Http::get('https://collectionapi.metmuseum.org/public/collection/v1/departments')->json()['departments']);
    // return Http::get('https://collectionapi.metmuseum.org/public/collection/v1/departments')->json()['data'];
});
