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
    $furtoVeiculo->furto_ou_perda = 'Furto';
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

}
