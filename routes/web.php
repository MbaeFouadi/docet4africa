<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\PartenaireController;
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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/A-propos', function () {
    return view('about');
})->name('about');

Route::get('/Actualités', function () {
    return view('actualite');
})->name('actualites');

Route::get('/detail-actualite', function () {
    return view('detail_actualite');
})->name('detail-actualite');

Route::get('/detail-partner', function () {
    return view('detail_partner');
})->name('detail-partner');

Route::get("galeries",function(){

    return view('galerie');
})->name("galerie");
//admin

Route::get('/administrateur', function () {
    return view('admin.index');
})->name('administrateur');

// Route::get('/add_actualite', function () {
//     return view('admin.add_actualite');
// })->name('add_actualite');

// Route::get('/show_actualites', function () {
//     return view('admin.show_actualites');
// })->name('show_actualites');

// Route::get('/add_partenaire', function () {
//     return view('admin.add_partenaire');
// })->name('add_partenaire');

// Route::get('/show_partenaires', function () {
//     return view('admin.show_partenaires');
// })->name('show_partenaire');

Route::get('/add_user', function () {
    return view('admin.add_user');
})->name('add_user');

Route::get('/show_users', function () {
    return view('admin.show_users');
})->name('show_users');



Route::resource('/actualites',ActualiteController::class);


Route::resource('/partenaires',PartenaireController::class);
Route::resource('/actvites',PartenaireController::class);
Route::resource('/evenements',EvenementController::class);
Route::post('/equipe_projet',[PartenaireController::class,'equipe_projet'])->name("equipe_projet");



