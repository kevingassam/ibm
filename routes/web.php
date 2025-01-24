<?php

use App\Http\Controllers\ApiCrmController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\EtageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\PartenaireController;
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
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/articles', [FrontController::class, 'blogs'])->name('articles');
Route::get('/logout', [FrontController::class, 'logout'])->name('logout');
Route::post('/login', [FrontController::class, 'login_post'])->name('login.post');
Route::post('/contact', [FrontController::class, 'contact_post'])->name('contact.post');


Route::prefix('page')->group(function () {
    Route::get('/compare', [FrontController::class, 'compare'])->name('compare');
    Route::get('/check_exist_appartement/{id}', [FrontController::class, 'check_exist_appartement'])->name('check_exist_appartement');
    Route::post('/demandes/projet', [FrontController::class, 'demandes_post'])->name('demandes.post');
    Route::post('/demandes/demande_post_to_api', [FrontController::class, 'demande_post_to_api'])->name('demande_post_to_api');
    Route::get('/demander_appartement/{id}', [FrontController::class, 'demander_appartement'])->name('demander_appartement');
    Route::get('/article/{id}/{titre}', [FrontController::class, 'article'])->name('article');
});


Route::get('/api-logo', [ApiCrmController::class, 'logo'])->name('logo');
Route::get('/api-produit/{id}', [ApiCrmController::class, 'produit'])->name('api-produit');
Route::get('/api-propriete/{id}', [ApiCrmController::class, 'propriete'])->name('api-propriete');
Route::get('/api-appartement/{id}', [ApiCrmController::class, 'appartement'])->name('api-appartement');
Route::get('/api-projet/{id}', [ApiCrmController::class, 'projet'])->name('api-projet');


Route::middleware('auth')->group(function () {
    Route::post('/about/configuration', [ConfigurationController::class, 'update_about'])->name('update_about');
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
    Route::get('/projet/parking/{id}', [ParkingController::class, 'details_parking'])->name('details_parking');
    Route::post('/update-project-order', [ProjetController::class, 'updateProjectOrder'])->name('update.project.order');
    Route::post('/update-project-appartements', [ProjetController::class, 'updateProjectappartements'])->name('update.project.appartements');
    Route::resource('parkings', ParkingController::class);
});



Route::get('/projet/v/{statut?}', [FrontController::class, 'projet'])->name('projet');
Route::get('/{slug}', [FrontController::class, 'projet_details'])->name('projet_details');