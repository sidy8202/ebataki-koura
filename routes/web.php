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

Route::resource('/courriers_sortants', 'CourriersSortantsController', ['only' => ['index', 'store']]);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function() {


    Route::get('/utilisateursadd', [App\Http\Controllers\Admin\UtilisateursKouraController::class,'index']);
    Route::post('/utilisateursadd', [App\Http\Controllers\Admin\UtilisateursKouraController::class,'store']);


    Route::get('secretaire', [App\Http\Controllers\Admin\SecretaireController::class, 'index']);
    Route::post('secretaire',[App\Http\Controllers\Admin\SecretaireController::class, 'store']);

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('courriers_sortants', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
     
    
});

Route::prefix('users')->group(function() {
    Route::get('dashboard', [App\Http\Controllers\users\DashboardUsersController::class, 'index']);
  
});

Route::prefix('secretaire')->group(function() {
    Route::get('dashboard', [App\Http\Controllers\secretaires\DashboardSecretairesController::class, 'index']);
  
});





Route::resource('/utilisateurs', 'UtilisateursController',['only' => [ 'index', 'create','store']]);
Route::resource('/departements', 'DepartementsController');
Route::resource('/adminskoura', 'AdminsController',['only' => [ 'index', 'create','store']]);


Route::resource('/courriers_entrants', 'CourriersEntrantsController');
?>
