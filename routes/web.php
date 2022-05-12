<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EnderecosController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\VacinasController;
use App\Http\Controllers\ObservacoesController;
use App\Http\Controllers\UsersPerfilController;
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

Route::get('', function () {
    return view('/home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function(){

//User

Route::get('/user',[UsersController::class,'index'])->name('user.index');

Route::get('/user/edit/{user}',[UsersController::class,'edit'])->name('user.edit');

Route::patch('/user/update/{user}',[UsersController::class,'update'])->name('user.update');

Route::delete('/user/{id}', [UsersController::class, 'destroy'])->name('user.destroy');

//Endereco

Route::get('/endereco',[EnderecosController::class,'index'])->name('endereco.index');

Route::get('/endereco/create',[EnderecosController::class,'create'])->name('endereco.create');

Route::post('/endereco/store',[EnderecosController::class,'store'])->name('endereco.store');

Route::get('/endereco/edit/{endereco}',[EnderecosController::class,'edit'])->name('endereco.edit');

Route::patch('/endereco/update/{endereco}',[EnderecosController::class,'update'])->name('endereco.update');

Route::delete('/endereco/{id}', [EnderecosController::class, 'destroy'])->name('endereco.destroy');


//Pet

Route::get('/pet',[PetsController::class,'index'])->name('pet.index');

Route::get('/pet/create',[PetsController::class,'create'])->name('pet.create');

Route::post('/pet/store',[PetsController::class,'store'])->name('pet.store');

Route::get('/pet/edit/{pet}',[PetsController::class,'edit'])->name('pet.edit');

Route::patch('/pet/update/{pet}',[PetsController::class,'update'])->name('pet.update');

Route::delete('/pet/{id}', [PetsController::class, 'destroy'])->name('pet.destroy');

//Noticia

Route::get('/noticia',[NoticiasController::class,'index'])->name('noticia.index');

Route::get('/noticia/create',[NoticiasController::class,'create'])->name('noticia.create');

Route::post('/noticia/store',[NoticiasController::class,'store'])->name('noticia.store');

Route::get('/noticia/edit/{noticia}',[NoticiasController::class,'edit'])->name('noticia.edit');

Route::patch('/noticia/update/{noticia}',[NoticiasController::class,'update'])->name('noticia.update');

Route::delete('/noticia/{id}', [NoticiasController::class, 'destroy'])->name('noticia.destroy');

//Tipo

Route::get('/tipo',[TiposController::class,'index'])->name('tipo.index');

Route::get('/tipo/create',[TiposController::class,'create'])->name('tipo.create');

Route::post('/tipo/store',[TiposController::class,'store'])->name('tipo.store');

Route::get('/tipo/edit/{tipo}',[TiposController::class,'edit'])->name('tipo.edit');

Route::patch('/tipo/update/{tipo}',[TiposController::class,'update'])->name('tipo.update');

Route::delete('/tipo/{id}', [TiposController::class, 'destroy'])->name('tipo.destroy');

//Vacina

Route::get('/vacina',[VacinasController::class,'index'])->name('vacina.index');

Route::get('/vacina/create',[VacinasController::class,'create'])->name('vacina.create');

Route::post('/vacina/store',[VacinasController::class,'store'])->name('vacina.store');

Route::get('/vacina/edit/{vacina}',[VacinasController::class,'edit'])->name('vacina.edit');

Route::patch('/vacina/update/{vacina}',[VacinasController::class,'update'])->name('vacina.update');

Route::delete('/vacina/{id}', [VacinasController::class, 'destroy'])->name('vacina.destroy');

//Observação

Route::get('/observacao/create/{id}',[ObservacoesController::class,'create'])->name('observacao.create');
Route::patch('/observacao/store/{id}',[ObservacoesController::class,'store'])->name('observacao.store');

Route::delete('/observacao/{id}', [ObservacoesController::class, 'destroy'])->name('observacao.destroy');

Route::get('/observacao/{id}',[ObservacoesController::class,'index'])->name('observacao.index');

Route::get('/observacao/edit/{observacao}',[ObservacoesController::class,'edit'])->name('observacao.edit');

Route::patch('/observacao/update/{observacao}',[ObservacoesController::class,'update'])->name('observacao.update');


//Perfil Usuario

Route::get('/usuario',[UsersPerfilController::class,'usuario'])->name('perfil.usuario');

Route::get('/geral',[UsersPerfilController::class,'geral'])->name('perfil.geral');

Route::get('/meuspets',[UsersPerfilController::class,'meuspets'])->name('perfil.meuspets');
});