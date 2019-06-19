<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DenunciaAnonima;

class ControladorGuest extends Controller
{

    public function createDenunciaAnonima()
    {
        return view('novaDenunciaAnonima');
    }



        public function storeDenunciaAnonima(Request $request)
    {
      $regras = [
        'tipo' => 'required',
        'rua' => 'required',
        'bairro' => 'required',
        'cidade' => 'required',
        'estado' => 'required',
        'suspeito' => 'required',
        'descricao' => 'required',
    ];

    $mensagens = [
         //voce consegue especificar para cada validação uma mensagem diferente, entretanto isso fica inviável para sistemas muito grandes, por isso criamos mensagems genéricas com base apenas na validação

            //criando mensagens genéricas
        'required' => 'O campo :attribute é obrigatório',

    ];
        //caso de erro no preenchimento do formlario, a página ira recarregar com os dados cadastrados continuados reenchidos
    $tipo = $request->old('tipo');
    $rua = $request->old('rua');
    $bairro = $request->old('bairro');
    $cidade = $request->old('cidade');
    $estado = $request->old('estado');
    $suspeito = $request->old('suspeito');
    $descricao = $request->old('descricao');

    $request->validate($regras, $mensagens);


    $denuncia = new DenunciaAnonima();
    $denuncia->tipo = $request->input('tipo');
    $denuncia->rua = $request->input('rua');
    $denuncia->bairro = $request->input('bairro');
    $denuncia->cidade = $request->input('cidade');
    $denuncia->estado = $request->input('estado');
    $denuncia->descricao_suspeito = $request->input('suspeito');
    $denuncia->descricao_ocorrencia = $request->input('descricao');
    $denuncia->save();
    return redirect('/');

}

}
