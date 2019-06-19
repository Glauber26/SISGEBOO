@extends('layouts.appDenuncia')

@section('naveg')
Ocorrência Furto de Veículo #00000{{$veiculo->id}}
@section('linkantigo')
<li class="breadcrumb-item"><a href="http://localhost/SISGEBOO/public/admin/ocorrencias/furto/veiculos">Ocorrências Furtos e Roubos de Documentos</a></li>
@endsection
@endsection

@section('denunciaNome')
Ocorrência Furto de Veículo #00000{{$veiculo->id}}
@endsection

@section('denuncia')

		<div class="container" align="center">
			<div class="row">
				<div class="col-sm">
					<label>Número da ocorrêcia: <dt>#00000{{$veiculo->id}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Tipo da Ocorrência: <dt>FURTO DE VEÍCULO</dt></label>
				</div>
				<div class="col-sm">
					<label>Veículo Público: <dt> {{$veiculo->publico}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Categoria: <dt> {{$veiculo->categoria}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Data/Hora do furto: <dt>{{$veiculo->dataRoubo}} {{$veiculo->horaRoubo}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Criação do BO: <dt>{{$veiculo->created_at}}</dt></label>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm">
					<label>Tipo: <dt>{{$veiculo->tipo}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Marca: <dt>{{$veiculo->marca}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Placa: <dt>{{$veiculo->placa}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Cor: <dt>{{$veiculo->objeto_cor}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Chassi: <dt>{{$veiculo->chassi}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Renavam: <dt>{{$veiculo->renavam}}</dt></label>
				</div>
			</div>
		</div>

		<hr>

		<div class="container">

			<div class="row">
				<div class="col-sm">
					<dt>Local do Furto</dt><br>A vítima <b>{{$veiculo->nome}}</b> informa que o local onde o veículo foi roubado fica na Rua: <b>{{$veiculo->rua_roubo}}</b>, localizada no bairro <b>{{$veiculo->bairro_roubo}}</b> na cidade de <b>{{$veiculo->cidade_roubo}}</b> no estado de <b>{{$veiculo->estado_roubo}}</b>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-sm">
					A vítima <b>{{$veiculo->nome}}</b> que rezide no endereço: Rua <b>{{$veiculo->rua}}</b> no bairro <b>{{$veiculo->bairro}}</b>, na cidade de <b>{{$veiculo->cidade}}</b> localizada no estado de <b>{{$veiculo->estado}}</b> informa os detalhes da ocorrência: 
					<b>{{$veiculo->descricao_ocorrencia}}</b>
				</div>
				<div class="col-sm">
					<dt>Também informa a(s) descdrição(ões) do suseito </dt>
					{{$veiculo->descricao_suspeito}} e informa que <b>{{$veiculo->ameaca}}</b>, sofreu ameaça.
				</div>
			</div>
		</div>
	</div>

	<div class="card-footer"><a href="/SISGEBOO/public/admin/ocorrencias/furto/veiculos/visualizarbo/{{$veiculo->id}}/imprimir"  class="btn btn-sm btn-outline-success my-2 my-sm-0">Emitir Boletin de Ocorrência</a></div>
</div>

@endsection