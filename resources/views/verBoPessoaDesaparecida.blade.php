@extends('layouts.appDenuncia')

@section('denunciaNome')
Pessoa Desaparecida
@endsection

@section('denuncia')

<div class="card">
	<div class="card-header" align="center">Ocorrência Furto de Veículo #00000{{$pessoa->id}}</div>

	<div class="card-body">
		<div class="container" align="center">
			<div class="row">
				<div class="col-sm">
					<label>Número da ocorrêcia: <dt>#00000{{$pessoa->id}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Tipo da Ocorrência: <dt>PESSOA DESAPARECIDA</dt></label>
				</div>
				<div class="col-sm">
					<label>Criação do BO: <dt>{{$pessoa->created_at}}</dt></label>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm">
					<label>Nome: <dt>{{$pessoa->nome}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Nascimento: <dt>{{$pessoa->nascimento}}</dt></label>
				</div>
				<div class="col-sm">
					<label>CPF: <dt>{{$pessoa->cpf}}</dt></label>
				</div>
				<div class="col-sm">
					<label>RG: <dt>{{$pessoa->ufrg}}{{$pessoa->rg}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Telefone Familiar Próximo: <dt>{{$pessoa->telefone}}</dt></label>
				</div>
			</div>
		</div>

		<hr>

		<div class="container">

			<div class="row">
				<div class="col-sm">
					<dt>Local do Desaparecimento</dt><br>Os familiares da vítima <b>{{$pessoa->nome}}</b> informam seu desaparecimento po meio deste Boletim de Ocorrência, informam também que o ultimo local onde a vítima foi vista fica na Rua: <b>{{$pessoa->ultima_localizacao_rua}}</b>, localizada no bairro <b>{{$pessoa->ultima_localizacao_bairro}}</b> na cidade de <b>{{$pessoa->ultima_localizacao_cidade}}</b> no estado de <b>{{$pessoa->ultima_localizacao_estado}}</b>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-sm">
					Os familiares mais próxims a vítima <b>{{$pessoa->nome}}</b> rezidem no endereço: Rua <b>{{$pessoa->rua}}</b> no bairro <b>{{$pessoa->bairro}}</b>, na cidade de <b>{{$pessoa->cidade}}</b> localizada no estado de <b>{{$pessoa->estado}}</b>. 
				</div>
				<div class="col-sm">
					O telefone para contato com os familiares em caso de novidades na investigação é o: <b>{{$pessoa->telefone}}</b>
				</div>
			</div>
		</div>
	</div>

	<div class="card-footer"><a href="/SISGEBOO/public/admin/ocorrencias/pessoasdesaparecidas/visualizarbo/{{$pessoa->id}}/imprimir"  class="btn btn-sm btn-outline-success my-2 my-sm-0">Emitir Boletin de Ocorrência</a></div>
</div>
</div>
</div>
</div>

@endsection