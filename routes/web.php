<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ControllerPerfilPet;
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

Route::get('/perfil-pet', [ControllerPerfilPet::class, 'getall']);

Route::post('/perfil-pet-cadastro', [ControllerPerfilPet::class, 'store']);

Route::get('/user-login', [ControllerPerfilPet::class, 'get']);

Route::post('/user-cadastro', [ControllerPerfilPet::class, 'store']);