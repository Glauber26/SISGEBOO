<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Pessoa;

class ControladorPessoa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novaPessoa');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $regras = [
            'name' => 'required',
            'password' => 'required',
            'cpf' => 'required',
            'rg' => 'required',
            'ufrg' => 'required',
            'nascimento' => 'required',
            'tipo' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'telefone' => 'required',
            'email' => 'required|unique:pessoas|email'
        ];

        $mensagens = [
         //voce consegue especificar para cada validação uma mensagem diferente, entretanto isso fica inviável para sistemas muito grandes, por isso criamos mensagems genéricas com base apenas na validação
            'name.required' => 'O campo nome é obrigatório',
            'email.unique' => 'O e-mail informado já está cadastrado',
            'ufrg.required' => 'O campo UF do RG é obrigatório',
            //criando mensagens genéricas
            'required' => 'O campo :attribute é obrigatório',
            'email' => 'Informe um e-mail válido'
        ];
        //caso de erro no preenchimento do formlario, a ágina ira recarregar com os dados cadastrados continuados reenchidos
        $name = $request->old('name');
        $cpf = $request->old('cpf');
        $rg = $request->old('rg');
        $nascimento = $request->old('nascimento');
        $rua = $request->old('rua');
        $bairro = $request->old('bairro');
        $tipo = $request->old('tipo');
        $ufrg = $request->old('ufrg');
        $cidade = $request->old('cidade');
        $bairro = $request->old('bairro');
        $email = $request->old('email');
        $telefone = $request->old('telefone');

        $request->validate($regras, $mensagens);


        $pessoa = new Pessoa();
        $pessoa->name = $request->input('name');
        $pessoa->cpf = $request->input('cpf');
        $pessoa->rg = $request->input('rg');
        $pessoa->ufrg = $request->input('ufrg');
        $pessoa->nascimento = $request->input('nascimento');
        $pessoa->tipo = $request->input('tipo');
        $pessoa->rua = $request->input('rua');
        $pessoa->bairro = $request->input('bairro');
        $pessoa->cidade = $request->input('cidade');
        $pessoa->estado = $request->input('estado');
        $pessoa->email = $request->input('email');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->password = Hash::make($request->input('password'));
        $pessoa->save();
        return redirect('/');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
