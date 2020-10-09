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

// Route::get('/', function()
// {
//     return View::make('pages.home');
// }); 

Route::resource('songs', 'App\Http\Controllers\SongController');
Route::resource('playlists', 'App\Http\Controllers\PlaylistController');

Route::get('/', 'App\Http\Controllers\DashboardController@index');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');
// Route::middleware()->get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');


