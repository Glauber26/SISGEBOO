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

Route::get('/admin/cadastro/policial/novo', 'ControladorPolicial@create')->name('cadastro.policial');
Route::post('/admin/cadastro/policial/novo', 'ControladorPolicial@store')->name('cadastro.policial.submit');
Route::get('/admin/policiais', 'ControladorPolicial@index')->name('busca.policiais');
Route::post('/admin/policiais/editar/{id}', 'ControladorPolicial@update');
Route::get('/admin/policiais/editar/{id}', 'ControladorPolicial@edit');
Route::get('/admin/policiais/apagar/{id}', 'ControladorPolicial@destroy');
Route::get('/admin/delegados', 'ControladorDelegado@index')->name('busca.delegados');
Route::get('/admin/pessoas', 'ControladorPessoa@index')->name('busca.pessoas');

Route::post('/admin/pessoas/editar/{id}', 'ControladorPessoa@update');
Route::get('/admin/pessoas/editar/{id}', 'ControladorPessoa@edit');
Route::get('/admin/pessoas/apagar/{id}', 'ControladorPessoa@destroy');



Route::post('/admin/delegados/editar/{id}', 'ControladorDelegado@update');
Route::get('/admin/delegados/editar/{id}', 'ControladorDelegado@edit');
Route::get('/admin/delegados/apagar/{id}', 'ControladorDelegado@destroy');
Route::get('/admin/cadastro/delegado/novo', 'ControladorDelegado@create')->name('cadastro.delegado');
Route::post('/admin/cadastro/delegado/novo', 'ControladorDelegado@store')->name('cadastro.delegado.submit');


//Route::get('/cadastro/delegado/novo', 'ControladorDelegado@create')->name('cadastro.delegado');
//Route::post('/cadastro/delegado/novo', 'ControladorDelegado@store')->name('cadastro.delegado.submit'); backdor do admin do sistema


//Rotas Policial
Route::get('/policial', 'PolicialController@index')->name('policial.dashboard');
Route::get('/policial/login', 'Auth\PolicialLoginController@index')->name('policial.login');
Route::post('/policial/login', 'Auth\PolicialLoginController@login')->name('policial.login.submit');


//Rotas Pessoa
Route::get('/pessoa', 'PessoaController@index')->name('pessoa.dashboard');
Route::get('/pessoa/login', 'Auth\PessoaLoginController@index')->name('pessoa.login');
Route::post('/pessoa/login', 'Auth\PessoaLoginController@login')->name('pessoa.login.submit');


Route::get('/identificacao', 'ControladorPessoa@selecionarPessoa')->name('cadastro.selecionar.pessoa');
Route::get('/identificacao/cadastro/pessoafisica', 'ControladorPessoa@create')->name('cadastro.pessoa.fisica');
Route::post('/identificacao/cadastro/pessoafisica', 'ControladorPessoa@store')->name('cadastro.pessoa.fisica.submit');

Route::get('/identificacao/cadastro/pessoajuridica', 'ControladorPessoa@create')->name('cadastro.pessoa.juridica');
Route::post('/identificacao/cadastro/pessoajuridica', 'ControladorPessoa@store')->name('cadastro.pessoa.juridica.submit');

Route::get('/identificacao/cadastro/pessoaestrangeira', 'ControladorPessoa@createPE')->name('cadastro.pessoa.estrangeira');
Route::post('/identificacao/cadastro/pessoaestrangeira', 'ControladorPessoa@storePE')->name('cadastro.pessoa.estrangeira.submit');

Route::get('/denunciaanonima', 'ControladorDenunciaAnonima@create')->name('denuncia.anonima');
Route::get('/admin/ocorrencias/anonimas', 'ControladorDenunciaAnonima@index')->name('busca.ocorrencias.anonimas');
Route::post('/denunciaanonima', 'ControladorDenunciaAnonima@store')->name('denuncia.anonima.submit');