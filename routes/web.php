<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PizzaController;
use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Pedido;

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

Route::get('/', function() {
    return view('index');
});



Route::get('/cliente/create/', [ClienteController::class, 'create']);
Route::post('/cliente', [ClienteController::class, 'store']);
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit']);
Route::put('/cliente/update/{id}', [ClienteController::class, 'update']);

Route::get('/endereco/create/{id}',[EnderecoController::class, 'create']);
Route::post('/endereco', [EnderecoController::class, 'store']);
Route::get('/endereco/edit/{id}', [EnderecoController::class, 'edit']);
Route::put('/endereco/update/{id}', [EnderecoController::class, 'update']);

Route::get('/pedido/create/{id}', [PedidoController::class, 'create']);
Route::post('/pedido',[PedidoController::class, 'store']);
Route::get('/listar', [PedidoController::class, 'index']);
Route::get('/pedido/edit/{id}', [PedidoController::class, 'edit']);
Route::put('/pedido/update/{id}', [PedidoController::class, 'update']);
Route::delete('/pedido/destroy/{id}', [PedidoController::class, 'destroy']);




Route::get('/sucesso/{id}', function($id) {
    return view('sucesso', ['id' => $id]);
});