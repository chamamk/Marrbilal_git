<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\TypeMarbreController;
use App\Http\Controllers\ModePaiementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\BonCommandeController;
use App\Http\Controllers\BlController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('accueil');
});
Route::get('/Profile',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store'])->name('register');



Route::resource('fournisseur',FournisseurController::class);
Route::resource('typemarbre',TypeMarbreController::class);
Route::resource('modepayment',ModePaiementController::class);
Route::resource('article',ArticleController::class);
Route::resource('client',ClientController::class);
Route::resource('achat',AchatController::class);
Route::resource('bonCommande',BonCommandeController::class);
Route::resource('bl',BlController::class);
Route::get('/Caisse', [BonCommandeController::class , 'caisse'])->name('caisse');



Route::get('/printviewfournisseur',[FournisseurController::class , 'printviewfournisseur']);
Route::get('/printviewarticle',[ArticleController::class , 'printviewarticle']);
Route::get('/printviewclient',[ClientController::class , 'printviewclient']);
Route::get('/printviewachat',[AchatController::class , 'printviewachat']);
Route::get('/printviewbon',[BonCommandeController::class , 'printviewbon']);
Route::get('/printviewbl',[BlController::class , 'printviewbl']);



