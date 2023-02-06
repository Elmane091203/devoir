<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

Route::resource('etudiants',EtudiantController::class);
Route::get('/',[EtudiantController::class,'redirect']);
Route::get('/etudiant',[EtudiantController::class,'premier'])->name('etudiants.premier');
Route::get('/etudian',[EtudiantController::class,'moyenne'])->name('etudiants.moyenne');