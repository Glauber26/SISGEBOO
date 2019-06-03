<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Policial;

class ControladorPolicial extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $policiais = Policial::all(); //Retorna todos os policiais
       return view('buscaPolicial', compact('policiais'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoPolicial');
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
        'funcao' => 'required',
        'rua' => 'required',
        'bairro' => 'required',
        'cidade' => 'required',
        'estado' => 'required',
        'telefone' => 'required',
        'email' => 'required|unique:Policials|email'
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
    $funcao = $request->old('funcao');
    $ufrg = $request->old('ufrg');
    $cidade = $request->old('cidade');
    $bairro = $request->old('bairro');
    $email = $request->old('email');
    $telefone = $request->old('telefone');

    $request->validate($regras, $mensagens);


    $Policial = new Policial();
    $Policial->name = $request->input('name');
    $Policial->cpf = $request->input('cpf');
    $Policial->rg = $request->input('rg');
    $Policial->ufrg = $request->input('ufrg');
    $Policial->nascimento = $request->input('nascimento');
    $Policial->funcao = $request->input('funcao');
    $Policial->rua = $request->input('rua');
    $Policial->bairro = $request->input('bairro');
    $Policial->cidade = $request->input('cidade');
    $Policial->estado = $request->input('estado');
    $Policial->email = $request->input('email');
    $Policial->telefone = $request->input('telefone');
    $Policial->password = Hash::make($request->input('password'));
    $Policial->save();
    return redirect('/admin');




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
        $policial = Policial::find($id);
        if (isset($policial)) {
            return view('editarPolicial', compact('policial'));
        }
        return redirect('/admin/policiais');
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

        $policial = Policial::find($id);
        if (isset($policial)) {
            $policial->name = $request->input('name');
            $policial->cpf = $request->input('cpf');
            $policial->rg = $request->input('rg');
            $policial->ufrg = $request->input('ufrg');
            $policial->nascimento = $request->input('nascimento');
            $policial->funcao = $request->input('funcao');
            $policial->rua = $request->input('rua');
            $policial->bairro = $request->input('bairro');
            $policial->cidade = $request->input('cidade');
            $policial->estado = $request->input('estado');
            $policial->email = $request->input('email');
            $policial->telefone = $request->input('telefone');
            $policial->password = Hash::make($request->input('password'));
            $policial->save();
        }

        return redirect('/admin/policiais');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $policial = Policial::find($id);
       if(isset($policial)){
        $policial->delete();
    }

    return redirect('/admin/policiais');
}
}
