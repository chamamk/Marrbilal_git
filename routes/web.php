<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\TypeMarbreController;
use App\Http\Controllers\ModePaiementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AchatController;
Route::get('/', function () {
    return view('accueil');
});

Route::resource('fournisseur',FournisseurController::class);
// Route::resource('typemarbre',TypeMarbreController::class);
// Route::resource('modePaiement',ModePaiementController::class);
Route::resource('article',ArticleController::class);
Route::resource('client',ClientController::class);
// Route::resource('achat',AchatController::class);



























// Route::get('/', function () {
//     return view('partials.navbar');
// });
// Route::get('/',function(){
//     return view('pages.accueil');
// });
// //------------------Article--------------------------
// Route::get('/Article',function(){
//     return view('pages.article.article');
// });
// Route::get('/Article/Ajouter',function(){
//     return view('pages.article.ajouterarticle');
// });
// Route::get('/Article/Modifier',function(){
//     return view('pages.article.editarticle');
// });
// //--------------------Client------------------
// Route::get('/Clients',function(){
//     return view('pages.clients.clients');
// });
// Route::get('/Clients/Ajouter',function(){
//     return view('pages.clients.ajouterclients');
// });
// Route::get('/Clients/Modifier',function(){
//     return view('pages.clients.editclient');
// });
// //------------------Achat-----------------------------
// Route::get('/Achat',function(){
//     return view('pages.achat.achat');
// });
// Route::get('/Achat/Ajouter',function(){
//     return view('pages.achat.ajouterachat');
// });
// Route::get('/Achat/Modifier',function(){
//     return view('pages.achat.editachat');
// });
// //------------------Fournisseur------------
// Route::get('/Fournisseur',function(){
//     return view('pages.Fournisseur.Fournisseur');
// });
// Route::get('/Fournisseur/Ajouter',function(){
//     return view('pages.fournisseur.ajouterfournisseur');
// });
// Route::get('/Fournisseur/Modifier',function(){
//     return view('pages.fournisseur.editfournisseur');
// });

