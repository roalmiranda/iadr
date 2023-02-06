<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\EventController;

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
//     return view('landingPage');
// });


Route::get('/',[LandingController::class,'index'])->name('landing.index');

Route::get('quienes-somos',[LandingController::class,'about'])->name('about');
Route::get('articulos',[LandingController::class,'article'])->name('article');
Route::get('directorio/{name}',[LandingController::class,'directorySearch'])->name('directory.search');
// Route::get('articulos/{nombre}',[LandingController::class,'articleSearch'])->name('article.search');

Route::get('contacto',[LandingController::class,'contact'])->name('contact');
Route::get('membresia',[LandingController::class,'membership'])->name('membership');

Route::get('eventos',[EventController::class,'list'])->name('event.list');
// Route::get('eventos/{nombre}',[EventController::class,'eventSearch'])->name('event.search');