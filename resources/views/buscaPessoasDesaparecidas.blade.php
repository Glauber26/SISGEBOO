@extends('layouts.appDenuncia')

@section('denunciaNome')
Pessoas Desaparecidas
@endsection

@section('denuncia')
<div class="card">
	<div class="card-header" align="center">Ocorrências Pessoas Desaparecidas</div>
	<div class="card-body">
		<table class="table table-striped table-hover" id="tabelapessoas">
			<thead align="center"> <!-- Cabeçalho da tabela -->
				<tr>

					<th>Nome</th>
					<th>CPF</th>
					<th>RG</th>
					<th>Nascimento</th>
					<th>Ultima Localização</th>
					<th>Vizualizar Ocorrência</th>
				</tr>
			</thead>

			<tbody align="center">
				@foreach($pessoas as $pessoa) <!-- Foreach responsável para colocar todas as informações de pessoas dentro da tabela -->
				<tr>

					<td>{{ $pessoa->nome }}</td>
					<td>{{ $pessoa->cpf }}</td>
					<td>{{ $pessoa->rg }}</td>
					<td>{{ $pessoa->nascimento }}</td>
					<td>Rua: {{ $pessoa->ultima_localizacao_rua }} | Bairro: {{ $pessoa->ultima_localizacao_bairro }} | Cidade: {{ $pessoa->ultima_localizacao_cidade }} | Estado: {{ $pessoa->ultima_localizacao_estado }}</td>
					<td>
						<a href="http://localhost/SISGEBOO/public/admin/ocorrencias/pessoasdesaparecidas/visualizarbo/{{ $pessoa->id }}" class="btn btn-sm btn-outline-primary my-2 my-sm-0">Ver BO</a>
					</tr>
					@endforeach
				</tbody>
			</table>


			<div class="card-footer" align="center">
				{{$pessoas->links()}}	
			</div>


			</div>
		</div>
	</div>
	@endsection