<?php

use App\Http\Controllers\productsController;
use App\Http\Controllers\programController;
use Illuminate\Support\Facades\Auth;
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
    return view('home' , ['name' => 'Agung']);
});
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\personcontroller::class, 'index'])->name('home');


Route::get('/', function () {
    return view('home');
});

Route::get('/news/{id}', function ($id) {
    return view('news',['keberapa'=>$id]);
});

Route::prefix('/product')->group(callback: function () {
    Route::get('/list', [productsController::class, 'ping']);
});

Route::prefix('/program')->group(callback: function () {
    Route::get('/list', [programController::class, 'ping']);
});

// Route::get('/program', function () {
//     return view('program');
// });

Route::get('/about-us', function () {
    return view('about-us');
});

// Route::get('/contact-us', function () {
//     return view('contact-us');
// });

Route::get('/contact-us', [App\Http\Controllers\contactController::class, 'ping']);