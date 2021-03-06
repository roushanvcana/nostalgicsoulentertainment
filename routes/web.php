<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MusicCategoriesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\TracksController;

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


Route::get('/', function () { return view('welcome'); });
// Route::view('/albums', 'albums');
// Route::view('/album', 'album');
// Route::view('/genre', 'genre');
Route::get('/genre', [MusicCategoriesController::class, 'genre'])->name('genre');
Route::get('/albums', [AlbumsController::class, 'albums'])->name('albums');
Route::get('/album/{id}',  [TracksController::class, 'album'])->name('album');
Route::get('/artists', [ArtistsController::class, 'artists'])->name('artists');
Route::get('/artist/{id}',  [TracksController::class, 'artist'])->name('artist');

Route::view('/about', 'about');
Route::view('/videos', 'videos');
Route::view('/video', 'video');
Route::view('/contact', 'contact');

Route::view('/rock-music', 'rock-music');
Route::view('/hip-hop-music', 'hip-hop-music');
Route::view('/jazz-music', 'jazz-music');
Route::view('/pop-music', 'pop-music');
Route::view('/classic-music', 'classic-music');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//Route::get('/admin/albums/{id}', [AlbumsController::class, 'show']);

Route::resource('admin/albums/', AlbumsController::class)->middleware('is_admin');
