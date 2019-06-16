<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ocorrencia;
use App\DenunciaAnonima;
use Barryvdh\DomPDF\Facade as PDF;

class AdminController extends Controller
{

	public function __construct(){
		$this->middleware('auth:admin');
	}


	public function pdf(){

		$veiculoFurtado = Ocorrencia::where( 'placa', '<>', NULL)->count();
		$docs = Ocorrencia::where( 'doc_numero', '<>', NULL)->count();
		$objs = Ocorrencia::where( 'objeto_nome', '<>', NULL)->count(); 
		$acidentes = Ocorrencia::where( 'vitimas', '<>', NULL)->count();
		$desaparecidas = Ocorrencia::where( 'ultima_localizacao_rua', '<>', NULL)->count();
		$anonimas = DenunciaAnonima::all()->count();


		if ($veiculoFurtado>$docs) {
			$maior = $veiculoFurtado;
			$maior1 = 'Maior indice no mês foi de Veículoas furtados, teve um total de: ';
		}else{
			$maior = $docs;
			$maior1 = 'Maior indice no mês foi de Documentos furtados ou perdidos, teve um total de: ';
		}

		if ($objs>$maior) {
			$maior = $objs;
			$maior1 = 'Maior indice no mês foi de Obetos furtados ou perdidos, teve um total de: ';
		}

		if ($acidentes>$maior) {
			$maior = $acidentes;
			$maior1 = 'Maior indice no mês foi de Acidentes de Trânsito, teve um total de: ';
		}

		if ($desaparecidas>$maior) {
			$maior = $desaparecidas;
			$maior1 = 'Maior indice no mês foi de Pessoas Desaparecidas, teve um total de: ';
		}

		if ($anonimas>$maior) {
			$maior = $anonimas;
			$maior1 = 'Maior indice no mês foi de Denuncias Anônimas, teve um total de: ';
		}



		$pdf = PDF::loadview ( 'ocorrenciasConstantes', compact('veiculoFurtado', 'anonimas', 'docs', 'acidentes', 'objs', 'desaparecidas', 'maior', 'maior1'));

	return $pdf->download('Ocorrência_Constantes.pdf');

      // return $pdf->stream();


}

public function index(){

	$veiculoFurtado = Ocorrencia::where( 'placa', '<>', NULL)->count();
	$docs = Ocorrencia::where( 'doc_numero', '<>', NULL)->count();
	$objs = Ocorrencia::where( 'objeto_nome', '<>', NULL)->count(); 
	$acidentes = Ocorrencia::where( 'vitimas', '<>', NULL)->count();
	$desaparecidas = Ocorrencia::where( 'ultima_localizacao_rua', '<>', NULL)->count();
	$anonimas = DenunciaAnonima::all()->count();



	if ($veiculoFurtado>$docs) {
		$maior = $veiculoFurtado;
		$maior1 = 'Maior indice no mês foi de Veículoas furtados, teve um total de: ';
	}else{
		$maior = $docs;
		$maior1 = 'Maior indice no mês foi de Documentos furtados ou perdidos, teve um total de: ';
	}

	if ($objs>$maior) {
		$maior = $objs;
		$maior1 = 'Maior indice no mês foi de Obetos furtados ou perdidos, teve um total de: ';
	}

	if ($acidentes>$maior) {
		$maior = $acidentes;
		$maior1 = 'Maior indice no mês foi de Acidentes de Trânsito, teve um total de: ';
	}

	if ($desaparecidas>$maior) {
		$maior = $desaparecidas;
		$maior1 = 'Maior indice no mês foi de Pessoas Desaparecidas, teve um total de: ';
	}

	if ($anonimas>$maior) {
		$maior = $anonimas;
		$maior1 = 'Maior indice no mês foi de Denuncias Anônimas, teve um total de: ';
	}


	return view('admin', compact('veiculoFurtado', 'anonimas', 'docs', 'acidentes', 'objs', 'desaparecidas', 'maior', 'maior1'));

}
}
