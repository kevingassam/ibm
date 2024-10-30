<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\EtageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TemoignageController;
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
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/compare', [FrontController::class, 'compare'])->name('compare');
Route::get('/check_exist_appartement', [FrontController::class, 'check_exist_appartement'])->name('check_exist_appartement');
Route::post('/contact', [FrontController::class, 'contact_post'])->name('contact.post');
Route::post('/demandes/projet', [FrontController::class, 'demandes_post'])->name('demandes.post');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/projet/v/{statut?}', [FrontController::class, 'projet'])->name('projet');
Route::get('/projet/d/{id}/{nom}', [FrontController::class, 'projet_details'])->name('projet_details');
Route::get('/articles', [FrontController::class, 'blogs'])->name('articles');
Route::get('/article/{id}/{titre}', [FrontController::class, 'article'])->name('article');
Route::get('/logout', [FrontController::class, 'logout'])->name('logout');
Route::post('/login', [FrontController::class, 'login_post'])->name('login.post');
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('dashboard');
    Route::get('/banners', [ConfigurationController::class, 'banners'])->name('banners');
    Route::get('/about-config', [ConfigurationController::class, 'about_config'])->name('about-config');
    Route::resource('blogs', BlogController::class);
    Route::resource('projets', ProjetController::class);
    Route::post('/admin/projet.deleteImage', [ProjetController::class, 'deleteSingleImage']);
    Route::resource('contacts', ContactController::class);
    Route::resource('temoignages', TemoignageController::class);
    Route::resource('configurations', ConfigurationController::class);
    Route::resource('partenaires', PartenaireController::class);
    Route::resource('etages', EtageController::class);
    Route::resource('demandes', DemandeController::class);
    Route::get('/projet/appartement/{id}', [ProjetController::class, 'details_appartement'])->name('details_appartement');
});


