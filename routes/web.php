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


//Route::get('/', function () { return view('welcome'); });

Route::get('/h', [@WelcomeController::class, 'index']);
// Route::view('/albums', 'albums');
// Route::view('/album', 'album');
// Route::view('/genre', 'genre');
Route::post('/artist-save', [ArtistsController::class, 'store']);
Route::post('/artist-update', [ArtistsController::class, 'update']);
Route::get('/artist-delete/{id}', [ArtistsController::class, 'destroy']);

Route::post('/album-save', [AlbumsController::class, 'store']);
Route::post('/album-update', [AlbumsController::class, 'update']);
Route::get('/album-delete/{id}', [AlbumsController::class, 'destroy']);

Route::post('/category-save', [MusicCategoriesController::class, 'store']);
Route::post('/category-update', [MusicCategoriesController::class, 'update']);
Route::get('/category-delete/{id}', [MusicCategoriesController::class, 'destroy']);

Route::post('/tractlist-save', [TracksController::class, 'store']);
Route::post('/tractlist-update', [TracksController::class, 'update']);
Route::get('/tractlist-delete/{id}', [TracksController::class, 'destroy']);

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

Route::get('/admin/artist', [ArtistsController::class, 'index']);

Route::get('/admin/music-category', [MusicCategoriesController::class, 'index']);
Route::get('/admin/tractlist/{id}', [TracksController::class, 'index']);
Route::get('/admin/albums', [ AlbumsController::class, 'index']);


Route::resource('admin/albums/', AlbumsController::class)->middleware('is_admin');
