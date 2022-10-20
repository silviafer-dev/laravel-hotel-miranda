<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;

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



Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function()
{
   return View::make('about', ['title' => 'About Us']);
});
Route::get('/contact', [ContactController::class, 'index'])-> name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/rooms', [RoomController::class, 'index']) ->name('rooms');
Route::get('/rooms/{room}', function (Room $room) {
    return $room->id;
});

Route::get('/offers', [RoomController::class, 'index']) ->name('rooms');
