<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\TypeMarbreController;
use App\Http\Controllers\ModePaiementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\BonCommandeController;
use App\Http\Controllers\BlController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('accueil');
})->middleware('auth');

Route::resource('fournisseur',FournisseurController::class);
Route::get('/printviewfournisseur',[FournisseurController::class , 'printviewfournisseur']);
Route::resource('typemarbre',TypeMarbreController::class);
Route::resource('modepayment',ModePaiementController::class);
Route::resource('article',ArticleController::class);
Route::get('/printviewarticle',[ArticleController::class , 'printviewarticle']);
Route::resource('client',ClientController::class);
Route::get('/printviewclient',[ClientController::class , 'printviewclient']);
Route::resource('achat',AchatController::class);
Route::get('/printviewachat',[AchatController::class , 'printviewachat']);
Route::resource('bonCommande',BonCommandeController::class);
Route::get('/printviewbon',[BonCommandeController::class , 'printviewbon']);
Route::get('/Caisse', [BonCommandeController::class , 'caisse'])->name('caisse');
Route::resource('bl',BlController::class);
Route::get('/printviewbl',[BlController::class , 'printviewbl']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
