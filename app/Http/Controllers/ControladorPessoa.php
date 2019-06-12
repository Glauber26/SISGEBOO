<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Pessoa;

class ControladorPessoa extends Controller
{

 public function __construct(){
    $this->middleware('auth:admin');
}



    public function index()
    {

     /* $pessoas = DB::table('pessoas')->select('*')->where('cpf', '<>', NULL)->get(); Usando o DB table busca todas as pessoas que tem um cpf diferente de nulo
     return view('buscaPessoas', compact('pessoas'));*/


       $pessoas = Pessoa::where( 'cpf', '<>', NULL)->paginate(5); //Retorna todos os pessoas que possui o cpf diferente de nulo, utilizando o eloquent ORM
     //$pessoas = Pessoa::all(); //Retorna todos os pessoas
       return view('buscaPessoas', compact('pessoas'));
   }


   public function indexPessoaJuridica(){
       $pessoas = Pessoa::where( 'cnpj', '<>', NULL)->paginate(5); //Retorna todos os pessoas que possui o cpf diferente de nulo, utilizando o eloquent ORM
       //$pessoas = Pessoa::all(); //Retorna todos os pessoas
       return view('buscaPessoasJuridicas', compact('pessoas'));

   }

   public function indexPessoaEstrangeira(){
           $pessoas = Pessoa::where( 'passaporte', '<>', NULL)->paginate(5); //Retorna todos os pessoas que possui o cpf diferente de nulo, utilizando o eloquent ORM
       //$pessoas = Pessoa::all(); //Retorna todos os pessoas
           return view('buscaPessoasEstrangeiras', compact('pessoas'));
       }


       public function selecionarPessoa(){
        return view('novaOcorrenciaTipoPessoa');

    }

//-------------------------------------------------------


    public function createPJ()
    {
        return view('novaPessoaJuridica');

    }

    public function storePJ(Request $request)
    {

       $regras = [
        'name' => 'required',
        'password' => 'required',
        'cnpj' => 'required',
        'razao_social' => 'required',
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
            //criando mensagens genéricas
        'required' => 'O campo :attribute é obrigatório',
        'email' => 'Informe um e-mail válido'
    ];
        //caso de erro no preenchimento do formlario, a ágina ira recarregar com os dados cadastrados continuados reenchidos
    $name = $request->old('name');
    $cnpj = $request->old('cnpj');
    $razao_social = $request->old('razao_social');
    $nascimento = $request->old('nascimento');
    $rua = $request->old('rua');
    $bairro = $request->old('bairro');
    $tipo = $request->old('tipo');
    $cidade = $request->old('cidade');
    $bairro = $request->old('bairro');
    $email = $request->old('email');
    $telefone = $request->old('telefone');

    $request->validate($regras, $mensagens);


    $pessoa = new Pessoa();
    $pessoa->name = $request->input('name');
    $pessoa->cnpj = $request->input('cnpj');
    $pessoa->razao_social = $request->input('razao_social');
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


public function editPessoaJuridica($id)
{

  $pessoa = Pessoa::find($id);

  if (isset($pessoa)) {
    return view('editarPessoaJuridica', compact('pessoa'));
}

return redirect('/admin/pessoas/juridicas');
}


public function updatePessoaJuridica(Request $request, $id)
{
    $pessoa = Pessoa::find($id);
    if (isset($pessoa)) {
        $pessoa->name = $request->input('name');
        $pessoa->cnpj = $request->input('cnpj');
        $pessoa->razao_social = $request->input('razao_social');
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
    }

    return redirect('/admin/pessoas/juridicas');
}


public function destroyPessoaJuridica($id)
{
    $pessoa = Pessoa::find($id);
    if(isset($pessoa)){
        $pessoa->delete();
    }

    return redirect('/admin/pessoas/juridicas');
}


//-------------------------------------------------------


public function createPE()
{
    return view('novaPessoaEstrangeira');

}

public function storePE(Request $request)
{

   $regras = [
    'name' => 'required',
    'password' => 'required',
    'rne' => 'required',
    'passaporte' => 'required',
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
            //criando mensagens genéricas
    'required' => 'O campo :attribute é obrigatório',
    'email' => 'Informe um e-mail válido'
];
        //caso de erro no preenchimento do formlario, a ágina ira recarregar com os dados cadastrados continuados reenchidos
$name = $request->old('name');
$rne = $request->old('rne');
$passaporte = $request->old('passaporte');
$nascimento = $request->old('nascimento');
$rua = $request->old('rua');
$bairro = $request->old('bairro');
$tipo = $request->old('tipo');
$cidade = $request->old('cidade');
$bairro = $request->old('bairro');
$email = $request->old('email');
$telefone = $request->old('telefone');

$request->validate($regras, $mensagens);


$pessoa = new Pessoa();
$pessoa->name = $request->input('name');
$pessoa->rne = $request->input('rne');
$pessoa->passaporte = $request->input('passaporte');
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


public function editPessoaEstrangeira($id)
{

  $pessoa = Pessoa::find($id);

  if (isset($pessoa)) {
    return view('editarPessoaEstrangeira', compact('pessoa'));
}

return redirect('/admin/pessoas/estrangeiras');
}


public function updatePessoaEstrangeira(Request $request, $id)
{
    $pessoa = Pessoa::find($id);
    if (isset($pessoa)) {
        $pessoa->name = $request->input('name');
        $pessoa->passaporte = $request->input('passaporte');
        $pessoa->rne = $request->input('rne');
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
    }

    return redirect('/admin/pessoas/estrangeiras');
}


public function destroyPessoaEstrangeira($id)
{
    $pessoa = Pessoa::find($id);
    if(isset($pessoa)){
        $pessoa->delete();
    }

    return redirect('/admin/pessoas/juridicas');
}



//----------------------------------------------

public function create()
{
    return view('novaPessoa');

}

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


public function show($id)
{
        //
}

public function edit($id)
{

  $pessoa = Pessoa::find($id);

  if (isset($pessoa)) {
    return view('editarPessoa', compact('pessoa'));
}

return redirect('/admin/pessoas');
}


public function update(Request $request, $id)
{
    $pessoa = Pessoa::find($id);
    if (isset($pessoa)) {
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
    }

    return redirect('/admin/pessoas/fisica');
}


public function destroy($id)
{
    $pessoa = Pessoa::find($id);
    if(isset($pessoa)){
        $pessoa->delete();
    }

    return redirect('/admin/pessoas/fisica');
}
}
