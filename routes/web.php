<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'accueil']);
Route::get('/metier', [MainController::class, 'artisan']);
Route::get('/client', [MainController::class, 'client']);
Route::get('/login_client', [MainController::class, 'clientAuthentifier']);
Route::get('/inscription_cl', [ClientController::class, 'index']);
Route::post('ajouter_client', [ClientController::class, 'store']);












Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
