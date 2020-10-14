<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Playlist;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->get('/user/playlists', function (Request $request) {
    $user = $request->user();

    return $user->playlists;
});


Route::middleware(['auth:sanctum'])->post('/user/playlists/{id}/add-song', function (Request $request,$id) {
    $user = $request->user();
    $playlist = Playlist::findOrFail($id);

    $playlist->songs()->toggle($request->get('id'));
    return $request->get('id');
});