@extends('layouts.appDelegado')

@section('content')


<main role="main">
	<div class="row" align="center">
		<div class="container">
			<div class="card border">
				<div class="card-header">
					<div class="card-title">
						Lista de Delegados
					</div>
				</div>

				<table class="table table-bordered table-hover" id="tabeladelegados">
					<thead align="center"> <!-- Cabeçalho da tabela -->
						<tr>

							<th>Nome</th>
							<th>CPF</th>
							<th>RG</th>
							<th>Nascimento</th>
							<th>Função</th>
							<th>Email</th>
							<th>Rua</th>
							<th>Bairro</th>
							<th>Cidade</th>
							<th>Ações</th>
						</tr>
					</thead>

					<tbody align="center">
						@foreach($delegados as $delegado) <!-- Foreach responsável para colocar todas as informações de delegados dentro da tabela -->
						<tr>

							<td>{{ $delegado->name }}</td>
							<td>{{ $delegado->cpf }}</td>
							<td>{{$delegado->ufrg}} {{ $delegado->rg }}</td>
							<td>{{ $delegado->nascimento }}</td>
							<td>{{ $delegado->email }}</td>
							<td>{{ $delegado->rua }}</td>
							<td>{{ $delegado->bairro }}</td>
							<td>{{ $delegado->cidade }}</td>
							<td>{{ $delegado->estado }}</td>
							<td>
								<a href="/SISGEBOO/public/admin/delegados/editar/{{$delegado->id}}" class="btn btn-sm btn-primary">Editar</a>
								<a href="/SISGEBOO/public/admin/delegados/apagar/{{$delegado->id}}" class="btn btn-sm btn-danger">Apagar</a></td>

							</tr>
							@endforeach
						</tbody>

					</table>
				</div>

			</div>
		</div>
	</main>

	@endsection
