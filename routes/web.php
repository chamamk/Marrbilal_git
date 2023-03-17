<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\TypeMarbreController;
use App\Http\Controllers\ModePaiementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AchatController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('fournisseur',FournisseurController::class);
Route::resource('typemarbre',TypeMarbreController::class);
Route::resource('modePaiement',ModePaiementController::class);
Route::resource('article',ArticleController::class);
Route::resource('client',ClientController::class);
Route::resource('achat',AchatController::class);
