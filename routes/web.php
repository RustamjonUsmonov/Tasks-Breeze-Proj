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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::view('/profile', 'profile')->name('profile');
    Route::put('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('tasks', \App\Http\Controllers\TaskController::class);
    Route::view('/contact', 'contact')->name('contact');
});
Route::get('invitation/{user}', [\App\Http\Controllers\TaskController::class, 'invitation'])->name('invitation');
require __DIR__ . '/auth.php';
