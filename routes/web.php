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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('secretaire',[App\Http\Controllers\SecretairesController::class, 'index']);
Route::get('secretaire',[App\Http\Controllers\SecretairesController::class, 'create']);
Route::post('secretaire',[App\Http\Controllers\SecretairesController::class, 'store']);
Route::resource('/departements', 'DepartementsController');

Route::resource('/utilisateurs', 'UtilisateursController');
