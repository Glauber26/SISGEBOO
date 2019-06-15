@extends('layouts.appDenuncia')

@section('denunciaNome')
Acidente de Trânsito
@endsection

@section('denuncia')

<div class="card">
	<div class="card-header" align="center">Acidente de Trânsito #00000{{$acidente->id}}</div>

	<div class="card-body">
		<div class="container" align="center">
			<div class="row">
				<div class="col-sm">
					<label>Número da ocorrêcia: <dt>#00000{{$acidente->id}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Tipo da Ocorrência: <dt>ACIDENTE DE TRÂNSITO</dt></label>
				</div>
				<div class="col-sm">
					<label>Criação do BO: <dt>{{$acidente->created_at}}</dt></label>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm">
					<label>Nome do Condutor: <dt>{{$acidente->nome}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Nascimento: <dt>{{$acidente->nascimento}}</dt></label>
				</div>
				<div class="col-sm">
					<label>CPF: <dt>{{$acidente->cpf}}</dt></label>
				</div>
				<div class="col-sm">
					<label>RG: <dt>{{$acidente->ufrg}}{{$acidente->rg}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Telefone Condutor: <dt>Não Informado</dt></label>
				</div>
			</div>
		</div>

		<hr>

		<div class="container">

			<div class="row">
				<div class="col-sm">
					<dt>Local do Acidente</dt><br>O condutor do veículo <b>{{$acidente->nome}}</b> informa por meio deste Boletin de Ocorrência, o acidente ocorrido na Rua: <b>{{$acidente->rua}}</b>, localizada no bairro <b>{{$acidente->bairro}}</b> na cidade de <b>{{$acidente->cidade}}</b> no estado de <b>{{$acidente->estado}}</b> no local <b>{{$acidente->descricao_local}}</b>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-sm">
					<dt>Descrição do Acidente</dt> <b>O condutor {{$acidente->nome}}</b> informa os detalhes do acidente "{{$acidente->descricao_ocorrencia}}"
				</div>
				<div class="col-sm">
					O condutor tambem informa que, <b>{{$acidente->vitimas}}</b> teve <b>{{$acidente->quant_vitimas}}</b> vitima(s)
				</div>
			</div>
		</div>
	</div>

	<div class="card-footer"><a href="/SISGEBOO/public/admin/ocorrencias/acidentestransito/visualizarbo/{{$acidente->id}}/imprimir"  class="btn btn-sm btn-outline-success my-2 my-sm-0">Emitir Boletin de Ocorrência</a></div>
</div>
</div>
</div>
</div>

@endsection