<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos')->middleware('auth');//Acessa apenas logado
Route::post('/produtos', [ProdutosController::class, 'index']);

Route::get('/produtos/add',[ProdutosController::class, 'add'])->name('produtos.add');
Route::post('/produtos/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');

Route::get('/produtos/{produto}',[ProdutosController::class, 'view'])->name('produtos.view');

Route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::post('/produtos/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave');

Route::get('/produtos/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');

Route::delete('/produtos/delete/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal');

Route::get('/users', [UserController::class, 'index'])->name('usuarios')->middleware('auth');

Route::post('/users', [UserController::class, 'index']);

Route::get('/users/add',[UserController::class, 'add'])->name('usuarios.add');
Route::post('/users/add', [UserController::class, 'addSave'])->name('usuarios.addSave');

Route::get('/users/{usuario}',[UserController::class, 'view'])->name('usuarios.view');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
