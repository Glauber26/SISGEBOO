@extends('layouts.appDenuncia')

@section('denunciaNome')
Acidentes de Trânsito
@endsection

@section('denuncia')
<div class="card">
	<div class="card-header" align="center">Ocorrências acidentes Desaparecidas</div>
	<div class="card-body">
		<table class="table table-striped table-hover" id="tabelaacidentes">
			<thead align="center"> <!-- Cabeçalho da tabela -->
				<tr>

					<th>Nome do Condutor</th>
					<th>CPF</th>
					<th>RG</th>
					<th>Nascimento</th>
					<th>Local do Acidente</th>
					<th>Descrição do Acidente</th>
					<th>Descrição do Acidente</th>
					<th>Vítimas</th>
				</tr>
			</thead>

			<tbody align="center">
				@foreach($acidentes as $acidente) <!-- Foreach responsável para colocar todas as informações de acidentes dentro da tabela -->
				<tr>

					<td>{{ $acidente->nome }}</td>
					<td>{{ $acidente->cpf }}</td>
					<td>{{ $acidente->rg }}</td>
					<td>{{ $acidente->nascimento }}</td>
					<td>Rua: {{ $acidente->rua }} | Bairro: {{ $acidente->bairro }} | Cidade: {{ $acidente->cidade }} | Estado: {{ $acidente->estado }}</td>
					<td>{{$acidente->descricao_local}}</td>
					<td>{{$acidente->vitimas}}</td>
					<td>
						<a href="http://localhost/SISGEBOO/public/admin/ocorrencias/acidentestransito/visualizarbo/{{ $acidente->id }}" class="btn btn-sm btn-outline-primary my-2 my-sm-0">Ver BO</a>
					</tr>
					@endforeach
				</tbody>
			</table>


			<div class="card-footer" align="center">
				{{$acidentes->links()}}	
			</div>


			</div>
		</div>
	</div>
	@endsection