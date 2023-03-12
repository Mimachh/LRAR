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

// Redirect after login
Route::get('redirects', 'App\Http\Controllers\HomeController@redirect');

// Route::get('/admin', function () {
//     return view('pages.admin');
// });

Route::middleware(['auth', 'role:Admin'])->group(function(){
    Route::get('/admin', function () {
        return view('pages.admin');
    });
});
Route::middleware(['auth', 'role:Associé'])->group(function(){
    Route::get('/associe', function () {
        return view('pages.associe');
    });
});
Route::middleware(['auth', 'role:Salarié'])->group(function(){
    Route::get('/salarie', function () {
        return view('pages.salarie');
    });
});
Route::middleware(['auth', 'role:Visiteur'])->group(function(){
    Route::get('/visiteur', function () {
        return view('pages.visiteur');
    });
});



