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
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('accueil');
});
// Route::get('/Profile',[RegisterController::class,'create']);
// Route::post('/register',[RegisterController::class,'store'])->name('register');
// Route::post('/accueil',[LoginController::class,'check'])->name('accueil');
Route::resource('fournisseur',FournisseurController::class);
Route::resource('typemarbre',TypeMarbreController::class);
Route::resource('modepayment',ModePaiementController::class);
Route::resource('article',ArticleController::class);
Route::resource('client',ClientController::class);
Route::resource('achat',AchatController::class);
Route::resource('bonCommande',BonCommandeController::class);
Route::resource('bl',BlController::class);
Route::get('/Caisse', [BonCommandeController::class , 'caisse'])->name('caisse');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
