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

// PAGANTI
Route::get('/', 'PaganteController@index') -> name('index');

// PAGAMENTI
Route::get('/pagamenti', 'PagamentoController@index') -> name('pagamento_index');

Route::get('/pagamento/delete/{id}' , 'PagamentoController@destroy') -> name('pagamento_destroy');

Route::get('/pagamento/edit/{id}', 'PagamentoController@edit') -> name('pagamento_edit');
Route::post('/pagamento/update/{id}', 'PagamentoController@update') ->name('pagamento_update');
