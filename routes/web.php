<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::resource('/courriers_sortants', 'CourriersSortantsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function() {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
});



Route::get('diagui',[App\Http\Controllers\SecretairesController::class, 'index']);
Route::post('secretaire',[App\Http\Controllers\SecretairesController::class, 'store']);


Route::resource('/utilisateurs', 'UtilisateursController');
Route::resource('/departements', 'DepartementsController');





