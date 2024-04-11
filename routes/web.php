<?php

use App\Http\Controllers\KuinOrderController;
use App\Http\Controllers\KuinOrderItemController;
use App\Models\KuinOrder;
use App\Models\KuinProduct;
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
});



Route::get('test', function () {
    dd(Http::get('https://collectionapi.metmuseum.org/public/collection/v1/departments')->json()['departments']);
});

Route::get('products', function () {
    return KuinProduct::all();
});

Route::get('products/{id}', function ($id) {
    return KuinProduct::where('id', '=', $id)->get();
});

Route::get('products/{searchValue}/search', function ($searchValue) {
    return KuinProduct::where('name', 'like', '%' . $searchValue . '%')->get();
});


Route::get('orders', function () {
    return KuinOrder::all();
});

Route::get('orders/{id}', function ($id) {
    return KuinOrder::where('id', '=', $id)->get();
});


Route::get('orderitems', [KuinOrderItemController::class , 'index'])->name('orderitems.index');

Route::get('orderitems/create', [KuinOrderItemController::class , 'create'])->name('orderitems.create');

Route::post('orderitems', [KuinOrderItemController::class , 'store'])->name('orderitems.store');

