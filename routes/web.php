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
    return view('index');
});

Route::get('/pessoas/cadastrar', function () {
    return view('form-pessoas');
});

Route::get('/sorteio', function () {
    return view('sorteio');
});

Route::get('/pessoas/editar', function () {
    return view('form-pessoas');
});
//Route::get('pessoas', 'PessoaController@list')->name('pessoas');
