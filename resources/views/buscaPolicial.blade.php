@extends('layouts.appDelegado')

@section('content')


<main role="main">
	<div class="row" align="center">
		<div class="container">
			<div class="card border">
				<div class="card-header">
					<div class="card-title">
						Lista de policiais
					</div>
				</div>

				<table class="table table-bordered table-hover" id="tabelapolicials">
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
						@foreach($policiais as $policial) <!-- Foreach responsável para colocar todas as informações de policials dentro da tabela -->
						<tr>

							<td>{{ $policial->name }}</td>
							<td>{{ $policial->cpf }}</td>
							<td>{{$policial->ufrg}} {{ $policial->rg }}</td>
							<td>{{ $policial->nascimento }}</td>
							<td>{{ $policial->email }}</td>
							<td>{{ $policial->rua }}</td>
							<td>{{ $policial->bairro }}</td>
							<td>{{ $policial->cidade }}</td>
							<td>{{ $policial->estado }}</td>
							<td>
								<a href="/SISGEBOO/public/admin/policiais/editar/{{$policial->id}}" class="btn btn-sm btn-primary">Editar</a>
								<a href="/SISGEBOO/public/admin/policiais/apagar/{{$policial->id}}" class="btn btn-sm btn-danger">Apagar</a></td>

							</tr>
							@endforeach
						</tbody>

					</table>
				</div>

			</div>
		</div>
	</main>

	@endsection
