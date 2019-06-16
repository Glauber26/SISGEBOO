@extends('layouts.appDenuncia')

@section('naveg')
Ocorrência {{$doc->furto_ou_perda}} {{$doc->tipo}} #00000{{$doc->id}}
@section('linkantigo')
<li class="breadcrumb-item"><a href="http://localhost/SISGEBOO/public/admin/ocorrencias/documentos">Ocorrências Furtos e Roubos de Documentos</a></li>
@endsection
@endsection

@section('denunciaNome')
Ocorrência {{$doc->furto_ou_perda}} {{$doc->tipo}} #00000{{$doc->id}}
@endsection

@section('denuncia')

		<div class="container" align="center">
			<div class="row">
				<div class="col-sm">
					<label>Número da ocorrêcia: <dt>#00000{{$doc->id}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Tipo da Ocorrência: <dt>{{$doc->furto_ou_perda}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Criação do BO: <dt>{{$doc->created_at}}</dt></label>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm">
					<label>Nome no Documento: <dt>{{$doc->doc_nome}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Documento Perdido: <dt>{{$doc->tipo}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Numero do Documento: <dt>{{$doc->doc_numero}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Nascimento: <dt>{{$doc->nascimento}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Telefone Vítima: <dt>{{$doc->telefone}}</dt></label>
				</div>
			</div>
		</div>

		<hr>

		<div class="container">

			<div class="row">
				<div class="col-sm">
					<dt>Local da/o {{$doc->furto_ou_perda}}</dt><br> A vitima  <b>{{$doc->doc_nome}}</b> informa por meio deste Boletin de Ocorrência, o local onde acredita ter perdido seu documento. Rua: <b>{{$doc->rua}}</b>, localizada no bairro <b>{{$doc->bairro}}</b> na cidade de <b>{{$doc->cidade}}</b> no estado de <b>{{$doc->estado}}</b>.
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-sm">
					<dt>Descrição do Ocorrência</dt> A vitima <b>{{$doc->doc_nome}}</b> informa os detalhes da ocorrência "{{$doc->descricao_ocorrencia}}"
				</div>
			</div>
		</div>
	</div>

	<div class="card-footer"><a href="/SISGEBOO/public/admin/ocorrencias/documentos/visualizarbo/{{$doc->id}}/imprimir"  class="btn btn-sm btn-outline-success my-2 my-sm-0">Emitir Boletin de Ocorrência</a></div>
</div>


@endsection