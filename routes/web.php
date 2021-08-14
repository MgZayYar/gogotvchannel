<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\ActorController;
use App\Http\Controllers\backend\DirectorController;
use App\Http\Controllers\backend\GenreController;
use App\Http\Controllers\backend\MovieController;
use App\Http\Controllers\backend\MovieDirectionController;
use App\Http\Controllers\backend\MovieCastController;
use App\Http\Controllers\backend\MovieGenreController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get( 'moviedetail/{id}',[FrontendController::class, 'moviedetail']);
Route::get('contact', [FrontendController::class, 'contact']);
Route::get('movie', [FrontendController::class, 'movie']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// backend
Route::group(['middleware' =>'role:admin'],function(){

Route::get('dashboard', [BackendController::class, 'dashboard']);
Route::resource('actors', ActorController::class);
Route::resource('directors', DirectorController::class);
Route::resource('genres', GenreController::class);
Route::resource('movies', MovieController::class);
Route::resource('movie_direction', MovieDirectionController::class);
Route::resource('movie_cast', MovieCastController::class);
Route::resource('movie_genres', MovieGenreController::class);

});



