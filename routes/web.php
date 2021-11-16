<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/categoria/{category}','CategoryController@show');

Route::match(['get','post'],'/',[ProdutoController::class,'index'])->name('home');
Route::match(['get','post'],'/categoria',[ProdutoController::class,'categoria'])->name('categoria');
Route::match(['get','post'],'/{idCategoria}/categoria',[ProdutoController::class,'categoria'])->name('id_categoria');
Route::match(['get','post'],'/cadastrar',[ClienteController::class,'cadastrar'])->name('cadastrar');
Route::match(['get','post'],'/cliente/cadastrar',[ClienteController::class,'cadastrarCliente'])->name('cadastrar_cliente');
Route::match(['get','post'],'{idProduto}/carrinho/adicionar',[ProdutoController::class,'adicionarCarrinho'])->name('adicionar_carrinho');
Route::match(['get','post'],'/carrinho',[ProdutoController::class,'verCarrinho'])->name('verCarrinho');
Route::match(['get','post'],'/{indice}/excluir-carrinho',[ProdutoController::class,'excluirCarrinho'])->name('carrinho_excluir');

