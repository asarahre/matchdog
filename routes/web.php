<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ControllerPerfilPet;
use App\Http\Controllers\ControllerUser;
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

Route::get('/perfil-pet', [ControllerPerfilPet::class, 'index']);

Route::post('/perfil-pet-/criar', [ControllerPerfilPet::class, 'store']);

Route::post('/perfil-pet/salvar', [ControllerPerfilPet::class, 'store']);

Route::get('/user', [ControllerUser::class, 'index']);

Route::get('/user/criar', [ControllerUser::class, 'create']);

Route::post('/user/salvar', [ControllerUser::class, 'store']);
