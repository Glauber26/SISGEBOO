@extends('layouts.appDenuncia')

@section('naveg')
Ocorrência Furto de {{$obj->objeto_nome}} #00000{{$obj->id}}
@section('linkantigo')
<li class="breadcrumb-item"><a href="http://localhost/SISGEBOO/public/admin/ocorrencias/objetos">Ocorrências Furtos e Roubos de Documentos</a></li>
@endsection
@endsection

@section('denunciaNome')
Ocorrência Furto de {{$obj->objeto_nome}} #00000{{$obj->id}}
@endsection

@section('denuncia')

		<div class="container" align="center">
			<div class="row">
				<div class="col-sm">
					<label>Número da ocorrêcia: <dt>#00000{{$obj->id}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Tipo da Ocorrência: <dt>{{$obj->furto_ou_perda}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Nome do Objeto: <dt> {{$obj->objeto_nome}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Marca: <dt> {{$obj->objeto_marca}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Data/Hora do furto: <dt>{{$obj->dataRoubo}} {{$obj->horaRoubo}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Criação do BO: <dt>{{$obj->created_at}}</dt></label>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm">
					<label>Valor: <dt>R${{$obj->objeto_valor}},00</dt></label>
				</div>
				<div class="col-sm">
					<label>Marca: <dt>{{$obj->objeto_marca}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Quantidade: <dt>{{$obj->objeto_quantidade}}</dt></label>
				</div>
				<div class="col-sm">
					<label>Cor: <dt>{{$obj->objeto_cor}}</dt></label>
				</div>
			</div>
		</div>

		<hr>

		<div class="container">

			<div class="row">
				<div class="col-sm">
					<dt>Local do Furto</dt><br>A vítima <b>{{$obj->nome}} portador(a) do CPF: {{$obj->cpf}} e RG: {{$obj->ufrg}}{{$obj->rg}}</b> informa que o objeto {{$obj->objeto_nome}} da marca {{$obj->objeto_marca}} que custa proximadamente R$ {{$obj->objeto_valor}},00 foi furtado/perdido nas imediações da Rua: <b>{{$obj->rua}}</b>, localizada no bairro <b>{{$obj->bairro}}</b> na cidade de <b>{{$obj->cidade}}</b> no estado de <b>{{$obj->estado}}</b>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-sm">
					A vítima <b>{{$obj->nome}}</b> informa a(s) descdrição da ocorrência "{{$obj->descricao_ocorrencia}}" e informa que <b>{{$obj->ameaca}}</b>, sofreu ameaça.
				</div>
			</div>
		</div>
	</div>

	<div class="card-footer"><a href="/SISGEBOO/public/admin/ocorrencias/objetos/visualizarbo/{{$obj->id}}/imprimir"  class="btn btn-sm btn-outline-success my-2 my-sm-0">Emitir Boletin de Ocorrência</a></div>
</div>


@endsection