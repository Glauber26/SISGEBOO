<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ocorrencia;

class ControladorOcorrencia extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }


//Ocorrencia de furto de veículos

    public function indexFurtoVeiculo()
    {
        //
    }


    public function createFurtoVeiculo()
    {
        return view('novoFurtoVeiculos');
    }


    public function storeFurtoVeiculo(Request $request)
    {

       $regras = [
        'rua' => 'required',
        'bairro' => 'required',
        'cidade' => 'required',
        'estado' => 'required',
        'descricao' => 'required',
        'tipo' => 'required',
        'chassi' => 'required',
        'renavam' =>'required',
        'placa' => 'required',
        'anofabricacao' => 'required',
        'categoria' => 'required',
        'marca' => 'required',
        'objeto_cor' => 'required',
        'dataRoubo' => 'required',
        'horaRoubo' => 'required',
        'ameaca' => 'required',
        'publico' => 'required',
        'rua_roubo' => 'required',
        'bairro_roubo' => 'required',
        'cidade_roubo' => 'required',
        'estado_roubo' => 'required',
        'nome' => 'required',
        'cpf' => 'required',
        'telefone' => 'required',

    ];

    $mensagens = [
        'required' => 'O campo :attribute é obrigatório',

    ];

    $rua = $request->old('rua');
    $bairro = $request->old('bairro');
    $cidade = $request->old('cidade');
    $estado = $request->old('estado');
    $suspeito = $request->old('suspeito');
    $descricao = $request->old('descricao');
    $tipo = $request->old('tipo');
    $chassi = $request->old('chassi');
    $renavam = $request->old('renavam');
    $placa = $request->old('placa');
    $anofabricacao = $request->old('anofabricacao');
    $categoria = $request->old('categoria');
    $marca = $request->old('marca');
    $objeto_cor = $request->old('objeto_cor');
    $dataRoubo = $request->old('dataRoubo');
    $horaRoubo = $request->old('horaRoubo');
    $ameaca = $request->old('ameaca');
    $publico = $request->old('publico');
    $rua_roubo = $request->old('rua_roubo');
    $cidade_roubo = $request->old('cidade_roubo');
    $estado_roubo = $request->old('estado_roubo');
    $cep_local_roubo = $request->old('cep_local_roubo');
    $nome = $request->old('nome');
    $cpf = $request->old('cpf');
    $telefone = $request->old('telefone');


    $request->validate($regras, $mensagens);

    $furtoVeiculo = new Ocorrencia();
    $furtoVeiculo->tipo = $request->input('tipo');
    $furtoVeiculo->rua = $request->input('rua');
    $furtoVeiculo->bairro = $request->input('bairro');
    $furtoVeiculo->cidade = $request->input('cidade');
    $furtoVeiculo->estado = $request->input('estado');
    $furtoVeiculo->descricao_suspeito = $request->input('suspeito');
    $furtoVeiculo->descricao_ocorrencia = $request->input('descricao');
    $furtoVeiculo->chassi = $request->input('chassi');
    $furtoVeiculo->renavam = $request->input('renavam');
    $furtoVeiculo->placa = $request->input('placa');
    $furtoVeiculo->anofabricacao = $request->input('anofabricacao');
    $furtoVeiculo->categoria = $request->input('categoria');
    $furtoVeiculo->marca = $request->input('marca');
    $furtoVeiculo->objeto_cor = $request->input('objeto_cor');
    $furtoVeiculo->dataRoubo = $request->input('dataRoubo');
    $furtoVeiculo->horaRoubo = $request->input('horaRoubo');
    $furtoVeiculo->ameaca = $request->input('ameaca');
    $furtoVeiculo->publico = $request->input('publico');
    $furtoVeiculo->furto_ou_perda = 'Furto Veiculo';
    $furtoVeiculo->rua_roubo = $request->input('rua_roubo');
    $furtoVeiculo->bairro_roubo = $request->input('bairro_roubo');
    $furtoVeiculo->cidade_roubo = $request->input('cidade_roubo');
    $furtoVeiculo->estado_roubo = $request->input('estado_roubo');
    $furtoVeiculo->cep_local_roubo = $request->input('cep_local_roubo');
    $furtoVeiculo->nome = $request->input('nome');
    $furtoVeiculo->cpf = $request->input('cpf');
    $furtoVeiculo->telefone = $request->input('telefone');
    $furtoVeiculo->save();

    return redirect('/');


}


public function showFurtoVeiculo($id)
{
        //
}


public function editFurtoVeiculo($id)
{
        //
}


public function updateFurtoVeiculo(Request $request, $id)
{
        //
}


public function destroyFurtoVeiculo($id)
{
        //
}




//--------------------------------------------------------------------------------


public function indexPessoaDesaparecida()
{
        //
}


public function createPessoaDesaparecida()
{
    return view('novaPessoaDesaparecida');
}


public function storePessoaDesaparecida(Request $request)
{

   $regras = [
    'rua' => 'required',
    'bairro' => 'required',
    'cidade' => 'required',
    'estado' => 'required',
    'descricao' => 'required',
    'ultima_localizacao_rua' => 'required',
    'ultima_localizacao_cidade' => 'required',
    'ultima_localizacao_estado' => 'required',
    'ultima_localizacao_bairro' => 'required',
    'nascimento' => 'required',
    'nome' => 'required',
    'cpf' => 'required',
    'telefone' => 'required',
    'rg' => 'required',
    'ufrg' => 'required',

];

$mensagens = [
    'required' => 'O campo :attribute é obrigatório',

];

$rua = $request->old('rua');
$bairro = $request->old('bairro');
$cidade = $request->old('cidade');
$estado = $request->old('estado');
$descricao = $request->old('descricao');
$ultima_localizacao_rua = $request->old('ultima_localizacao_rua');
$ultima_localizacao_cidade = $request->old('ultima_localizacao_cidade');
$ultima_localizacao_bairro = $request->old('ultima_localizacao_bairro');
$ultima_localizacao_estado = $request->old('ultima_localizacao_estado');
$nascimento = $request->old('nascimento');
$nome = $request->old('nome');
$cpf = $request->old('cpf');
$telefone = $request->old('telefone');
$rg = $request->old('rg');
$ufrg = $request->old('ufrg');


$request->validate($regras, $mensagens);

$pessoaDesaparecida = new Ocorrencia();
$pessoaDesaparecida->rua = $request->input('rua');
$pessoaDesaparecida->bairro = $request->input('bairro');
$pessoaDesaparecida->cidade = $request->input('cidade');
$pessoaDesaparecida->estado = $request->input('estado');
$pessoaDesaparecida->descricao_ocorrencia = $request->input('descricao');
$pessoaDesaparecida->ultima_localizacao_rua = $request->input('ultima_localizacao_rua');
$pessoaDesaparecida->ultima_localizacao_cidade = $request->input('ultima_localizacao_cidade');
$pessoaDesaparecida->ultima_localizacao_estado = $request->input('ultima_localizacao_estado');
$pessoaDesaparecida->ultima_localizacao_bairro = $request->input('ultima_localizacao_bairro');
$pessoaDesaparecida->nascimento = $request->input('nascimento');
$pessoaDesaparecida->ufrg = $request->input('ufrg');
$pessoaDesaparecida->rg = $request->input('rg');
$pessoaDesaparecida->nome = $request->input('nome');
$pessoaDesaparecida->cpf = $request->input('cpf');
$pessoaDesaparecida->telefone = $request->input('telefone');
$pessoaDesaparecida->save();

return redirect('/');


}


public function showPessoaDesaparecida($id)
{
        //
}


public function editPessoaDesaparecida($id)
{
        //
}


public function updatePessoaDesaparecida(Request $request, $id)
{
        //
}




//-------------------------------------------------------------------


public function indexAcidente()
{
        //
}


public function createAcidente()
{
    return view('novoAcidente');
}


public function storeAcidente(Request $request)
{

   $regras = [

    'descricao' => 'required',
    'quant_vitimas' => 'required',
    'vitimas' => 'required',
    'bairroOcorrencia' => 'required',
    'ruaOcorrencia' => 'required',
    'cidadeOcorrencia' => 'required',
    'estadoOcorrencia' => 'required',
    'descricao_local' => 'required',
    'nascimento' => 'required',
    'nome' => 'required',
    'cpf' => 'required',
    'rg' => 'required',
    'ufrg' => 'required',

];

$mensagens = [
    'required' => 'O campo :attribute é obrigatório',

];

$rua = $request->old('ruaOcorrencia');
$bairro = $request->old('bairroOcorrencia');
$cidade = $request->old('cidadeOcorrencia');
$estado = $request->old('estadoOcorrencia');
$descricao_local = $request->old('descricao_local');
$descricao = $request->old('descricao');
$quant_vitimas = $request->old('quant_vitimas');
$vitimas = $request->old('vitimas');
$nascimento = $request->old('nascimento');
$nome = $request->old('nome');
$cpf = $request->old('cpf');
$rg = $request->old('rg');
$ufrg = $request->old('ufrg');


$request->validate($regras, $mensagens);

$acidente = new Ocorrencia();
$acidente->rua = $request->input('ruaOcorrencia');
$acidente->bairro = $request->input('bairroOcorrencia');
$acidente->cidade = $request->input('cidadeOcorrencia');
$acidente->estado = $request->input('estadoOcorrencia');
$acidente->descricao_local = $request->input('descricao_local');
$acidente->descricao_suspeito = $request->input('descricao');
$acidente->quant_vitimas = $request->input('quant_vitimas');
$acidente->vitimas = $request->input('vitimas');
$acidente->nascimento = $request->input('nascimento');
$acidente->ufrg = $request->input('ufrg');
$acidente->rg = $request->input('rg');
$acidente->nome = $request->input('nome');
$acidente->cpf = $request->input('cpf');
$acidente->save();

return redirect('/');


}


public function showAcidente($id)
{
        //
}


public function editAcidente($id)
{
        //
}


public function updateAcidente(Request $request, $id)
{
        //
}


}