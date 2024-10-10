<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EtageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
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

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/login', [FrontController::class, 'login'])->name('login');
Route::get('/logout', [FrontController::class, 'logout'])->name('logout');
Route::post('/login', [FrontController::class, 'login_post'])->name('login.post');
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('dashboard');
    Route::resource('blogs', BlogController::class);
    Route::resource('projets', ProjetController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('configurations', ConfigurationController::class);
    Route::resource('etages', EtageController::class);
    Route::get('/projet/appartement/{id}', [ProjetController::class, 'details_appartement'])->name('details_appartement');
});


