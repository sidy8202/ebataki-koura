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

<<<<<<< HEAD
Route::resource('/departements', 'DepartementsController');

=======
Route::resource('/utilisateurs', 'UtilisateursController');
>>>>>>> 8d6ad52413589653487e4950899d72bc5f5b002f
