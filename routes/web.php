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
Route::get('/imprimir/{id}', 'ControladorDenunciaAnonima@pdf')->name('home');




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
Route::get('/admin/pessoas/fisica', 'ControladorPessoa@index')->name('busca.pessoas');
Route::get('/admin/pessoas/juridicas', 'ControladorPessoa@indexPessoaJuridica')->name('busca.pessoas.juridica');
Route::get('/admin/pessoas/estrangeiras', 'ControladorPessoa@indexPessoaEstrangeira')->name('busca.pessoas.estrangeira');

Route::post('/admin/pessoas/editar/{id}', 'ControladorPessoa@update');
Route::get('/admin/pessoas/editar/{id}', 'ControladorPessoa@edit');
Route::get('/admin/pessoas/apagar/{id}', 'ControladorPessoa@destroy');

Route::post('/admin/pessoas/juridicas/editar/{id}', 'ControladorPessoa@updatePessoaJuridica');
Route::get('/admin/pessoas/juridicas/editar/{id}', 'ControladorPessoa@editPessoaJuridica');
Route::get('/admin/pessoas/juridicas/apagar/{id}', 'ControladorPessoa@destroyPessoaJuridica');

Route::post('/admin/pessoas/estrangeiras/editar/{id}', 'ControladorPessoa@updatePessoaEstrangeira');
Route::get('/admin/pessoas/estrangeiras/editar/{id}', 'ControladorPessoa@editPessoaEstrangeira');
Route::get('/admin/pessoas/estrangeiras/apagar/{id}', 'ControladorPessoa@destroyPessoaEstrangeira');

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

Route::get('/identificacao/cadastro/pessoajuridica', 'ControladorPessoa@createPJ')->name('cadastro.pessoa.juridica');
Route::post('/identificacao/cadastro/pessoajuridica', 'ControladorPessoa@storePJ')->name('cadastro.pessoa.juridica.submit');

Route::get('/identificacao/cadastro/pessoaestrangeira', 'ControladorPessoa@createPE')->name('cadastro.pessoa.estrangeira');
Route::post('/identificacao/cadastro/pessoaestrangeira', 'ControladorPessoa@storePE')->name('cadastro.pessoa.estrangeira.submit');


//Ocorrências anônimas
Route::get('/denunciaanonima', 'ControladorGuest@createDenunciaAnonima')->name('denuncia.anonima');
Route::post('/denunciaanonima', 'ControladorGuest@storeDenunciaAnonima')->name('denuncia.anonima.submit');
Route::get('/admin/ocorrencias/anonimas', 'ControladorDenunciaAnonima@index')->name('busca.ocorrencias.anonimas');
Route::get('/admin/ocorrencias/anonimas/visualizar/{id}', 'ControladorDenunciaAnonima@show');
Route::post('/denunciaanonima', 'ControladorDenunciaAnonima@store')->name('denuncia.anonima.submit');


Route::get('/admin/ocorrencias/furto/veiculos/novo', 'ControladorOcorrencia@createFurtoVeiculo')->name('furto.veiculo.novo');
Route::get('/admin/ocorrencias/furto/veiculos', 'ControladorOcorrencia@indexFurtoVeiculo')->name('busca.furto.veiculo');
Route::post('/admin/ocorrencias/furto/veiculos/novo', 'ControladorOcorrencia@storeFurtoVeiculo')->name('furto.veiculo.submit');
Route::get('/admin/ocorrencias/furto/veiculos/visualizarbo/{id}', 'ControladorOcorrencia@showFurtoVeiculo')->name('furto.veiculo.ver');
Route::get('/admin/ocorrencias/furto/veiculos/visualizarbo/{id}/imprimir', 'ControladorOcorrencia@pdfFurtoVeiculos')->name('furto.veiculo.imprimir');

Route::get('/admin/ocorrencias/pessoasdesaparecidas/novo', 'ControladorOcorrencia@createPessoaDesaparecida')->name('pessoa.desaparecida.novo');
Route::get('/admin/ocorrencias/pessoasdesaparecidas', 'ControladorOcorrencia@indexPessoaDesaparecida')->name('pessoa.desaparecida.busca');
Route::get('/admin/ocorrencias/pessoasdesaparecidas/visualizarbo/{id}', 'ControladorOcorrencia@showPessoaDesaparecida')->name('pessoa.desaparecida.ver');
Route::get('/admin/ocorrencias/pessoasdesaparecidas/visualizarbo/{id}/imprimir', 'ControladorOcorrencia@pdfPessoaDesaparecida')->name('pessoa.desaparecida.imprimir');
Route::post('/admin/ocorrencias/pessoasdesaparecidas/novo', 'ControladorOcorrencia@storePessoaDesaparecida')->name('pessoa.desaparecida.submit');

Route::get('/admin/ocorrencias/acidentestransito/novo', 'ControladorOcorrencia@createAcidente')->name('acidente.novo');
Route::post('/admin/ocorrencias/acidentestransito/novo', 'ControladorOcorrencia@storeAcidente')->name('acidente.submit');
Route::get('/admin/ocorrencias/acidentestransito', 'ControladorOcorrencia@indexAcidente')->name('acidente.busca');
Route::get('/admin/ocorrencias/acidentestransito/visualizarbo/{id}', 'ControladorOcorrencia@showAcidente')->name('acidente.ver');
Route::get('/admin/ocorrencias/acidentestransito/visualizarbo/{id}/imprimir', 'ControladorOcorrencia@pdfAcidente')->name('acidente.imprimir');

Route::get('/admin/ocorrencias/documentos', 'ControladorOcorrencia@indexDoc')->name('doc.busca');
Route::get('/admin/ocorrencias/documentos/visualizarbo/{id}', 'ControladorOcorrencia@showDoc')->name('doc.ver');
Route::get('/admin/ocorrencias/documentos/visualizarbo/{id}/imprimir', 'ControladorOcorrencia@pdfDoc')->name('doc.imprimir');
Route::get('/admin/ocorrencias/documentos/novo', 'ControladorOcorrencia@createDoc')->name('doc.novo');
Route::post('/admin/ocorrencias/documentos/novo', 'ControladorOcorrencia@storeDoc')->name('doc.submit');

Route::get('/admin/ocorrencias/objetos/novo', 'ControladorOcorrencia@createObj')->name('obj.novo');
Route::get('/admin/ocorrencias/objetos', 'ControladorOcorrencia@indexObj')->name('obj.busca');
Route::get('/admin/ocorrencias/objetos/visualizarbo/{id}', 'ControladorOcorrencia@showObj')->name('obj.ver');
Route::get('/admin/ocorrencias/objetos/visualizarbo/{id}/imprimir', 'ControladorOcorrencia@pdfObj')->name('obj.imprimir');
Route::post('/admin/ocorrencias/objetos/novo', 'ControladorOcorrencia@storeObj')->name('obj.submit');