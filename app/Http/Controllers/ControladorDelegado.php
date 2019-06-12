<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class ControladorDelegado extends Controller
{


    public function __construct(){
        $this->middleware('auth:admin');
    }


    public function index()
    {
    $delegados = Admin::paginate(5); //Retorna todos os delegados
    return view('buscaDelegado', compact('delegados'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoDelegado');
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
        'email' => 'required|unique:admins|email'
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


    $Delegado = new Admin();
    $Delegado->name = $request->input('name');
    $Delegado->cpf = $request->input('cpf');
    $Delegado->rg = $request->input('rg');
    $Delegado->ufrg = $request->input('ufrg');
    $Delegado->nascimento = $request->input('nascimento');
    $Delegado->funcao = $request->input('funcao');
    $Delegado->rua = $request->input('rua');
    $Delegado->bairro = $request->input('bairro');
    $Delegado->cidade = $request->input('cidade');
    $Delegado->estado = $request->input('estado');
    $Delegado->email = $request->input('email');
    $Delegado->telefone = $request->input('telefone');
    $Delegado->password = Hash::make($request->input('password'));
    $Delegado->save();
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
       $delegado = Admin::find($id);
       if (isset($delegado)) {
        return view('editarDelegado', compact('delegado'));
    }
    return redirect('/admin/delegados');
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
        $delegado = Admin::find($id);
        if (isset($delegado)) {
            $delegado->name = $request->input('name');
            $delegado->cpf = $request->input('cpf');
            $delegado->rg = $request->input('rg');
            $delegado->ufrg = $request->input('ufrg');
            $delegado->nascimento = $request->input('nascimento');
            $delegado->funcao = $request->input('funcao');
            $delegado->rua = $request->input('rua');
            $delegado->bairro = $request->input('bairro');
            $delegado->cidade = $request->input('cidade');
            $delegado->estado = $request->input('estado');
            $delegado->email = $request->input('email');
            $delegado->telefone = $request->input('telefone');
            $delegado->password = Hash::make($request->input('password'));
            $delegado->save();
        }

        return redirect('/admin/delegados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $delegado = Admin::find($id);
       if(isset($delegado)){
        $delegado->delete();
    }

    return redirect('/admin/delegados');
}
}
