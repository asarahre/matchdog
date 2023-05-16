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
    return view('user.login');
});

Route::get('/perfil-pet',  [ControllerPerfilPet::class, 'index']);

Route::get('/perfil-pet/criar', [ControllerPerfilPet::class, 'create']);

Route::post('/perfil-pet/salvar', [ControllerPerfilPet::class, 'store']);

Route::get('/user', [ControllerUser::class, 'index']);

Route::get('/user/criar', [ControllerUser::class, 'create'])->name('usercriar');

Route::post('/user/salvar', [ControllerUser::class, 'store']);

Route::post('/user/login', [ControllerUser::class, 'login']);

Route::get('/user/form', [ControllerUser::class, 'form']);
