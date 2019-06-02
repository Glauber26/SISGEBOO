<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//Rotas Admin
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');


//Rotas Policial
Route::get('/policial', 'PolicialController@index')->name('policial.dashboard');
Route::get('/policial/login', 'Auth\PolicialLoginController@index')->name('policial.login');
Route::post('/policial/login', 'Auth\PolicialLoginController@login')->name('policial.login.submit');


//Rotas Pessoa
Route::get('/pessoa', 'PessoaController@index')->name('pessoa.dashboard');
Route::get('/pessoa/login', 'Auth\PessoaLoginController@index')->name('pessoa.login');
Route::post('/pessoa/login', 'Auth\PessoaLoginController@login')->name('pessoa.login.submit');


Route::get('/cadastro', 'ControladorPessoa@create')->name('cadastro.pessoa');
Route::post('/cadastro', 'ControladorPessoa@store')->name('cadastro.pessoa.submit');

