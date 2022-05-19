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
 });
//  Route::get('/create-user', [App\Http\Controllers\Auth\RegisterController::class, ''])->name('');
 Route::get('/contact', [App\Http\Controllers\contactController::class, 'show'])->name('showcontact');
 Route::get('/connexion', [App\Http\Controllers\Auth\loginController::class, 'index'])->name('login');
 Route::get('/devis', [App\Http\Controllers\devisController::class, 'show'])->name('showdevis');
 Route::get('/signaler', [App\Http\Controllers\devisController::class, 'signaler'])->name('signaler');
 // Route::get('/profil', [App\Http\Controllers\details_resultat\profilController::class, 'show'])->name('showprofil');
 Route::get('/resultat', [App\Http\Controllers\resultatController::class, 'show'])->name('showgrid');
 Route::get('/resultat_list', [App\Http\Controllers\resultatController::class, 'showlist'])->name('showlist');
 Route::get('/categorie', [App\Http\Controllers\Categories\categorieController::class, 'index'])->name('categorie');
 Route::get('/sous_categorie', [App\Http\Controllers\Categories\sousCat::class, 'sous_cat'])->name('souscat');
 Route::get('/details', [App\Http\Controllers\details_resultat\details_projetController::class, 'showdetailsprojet'])->name('details');
 Route::get('/profile', [App\Http\Controllers\details_resultat\profilController::class, 'show'])->name('showprofil');
 Route::get('/espace_pro/index' , [App\Http\Controllers\espacePro\indexController::class, 'show'])->name('showindex');
 Route::get('/espace_pro/profil' ,[App\Http\Controllers\espacePro\gestion_profilController::class, 'index'])->name('showprofil');
 Route::get('/espace_pro/modificationprofil' ,[App\Http\Controllers\espacePro\modification_profilController::class, 'index'])->name('modificcationprofil');
 Route::get('/espace_pro/gestioncat' ,[App\Http\Controllers\espacePro\gestion_catController::class, 'index'])->name('gestion_cat');
 Route::get('/espace_pro/gestionville' ,[App\Http\Controllers\espacePro\gestion_villeController::class, 'afficher'])->name('afficher');
 Route::post('/espace_pro/profil/updatepasse' ,[App\Http\Controllers\espacePro\gestion_profilController::class, 'updatePasse'])->name('updatePasse');
 Route::get('/espace_pro/profil/modifierProfil' ,[App\Http\Controllers\espacePro\modification_profilController::class, 'update_prof'])->name('update_prof');
 Route::get('/espace_pro/gestionville/delete_ville{id}',[App\Http\Controllers\espacePro\gestion_villeController::class, 'delete_ville'])->name('delete_ville');
 Route::get('/espace_pro/gestionville/delete_cat{id}',[App\Http\Controllers\espacePro\gestion_catController::class, 'delete_cat'])->name('delete_cat');


 
 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth','isAdmin']], function () { });

 Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return 'hi';
     });
});


