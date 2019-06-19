<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DenunciaAnonima;
use Barryvdh\DomPDF\Facade as PDF;


class ControladorDenunciaAnonima extends Controller
{


    public function __construct(){
        $this->middleware('auth:admin');
    }



    public function pdf($id){

       $denuncia = DenunciaAnonima::find($id);
      //PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

       $pdf = PDF::loadview ( 'imprimirAnonima', compact('denuncia') );
       return $pdf->download('denunciaAnonima.pdf');

      // return $pdf->stream();


   }


   public function index()    
   {
          $ocorrencias = DenunciaAnonima::paginate(4); //Retorna todos os pessoas
          return view('buscaOcorrenciasAnonimas', compact('ocorrencias'));
      }




      public function create()
      {
        return view('novaDenunciaAnonima');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $denuncia = DenunciaAnonima::find($id);

        if (isset($denuncia)) {
            return view('verDenunciasAnonimas', compact('denuncia'));
        }

        return redirect('/admin/ocorrencias/anonimas');


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
