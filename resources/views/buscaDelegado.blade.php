@extends('layouts.appDelegado')

@section('content')


<main role="main">
	<div class="row" align="center">
		<div class="container">

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="http://localhost/SISGEBOO/public/admin">Dashboard Admin</a></li>
					<li class="breadcrumb-item active" aria-current="page">Delegados</a></li>
				</ol>
			</nav>

			<div class="card border">
				<div class="card-header">
					<div class="card-title">
						Lista de Delegados
					</div>
				</div>

				<table class="table table-striped table-hover" id="tabeladelegados">
					<thead align="center"> <!-- Cabeçalho da tabela -->
						<tr>

							<th>Nome</th>
							<th>CPF</th>
							<th>RG</th>
							<th>Email</th>
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
							<td>{{ $delegado->email }}</td>
							<td>{{ $delegado->cidade }}/{{ $delegado->estado }}</td>
							<td>
								<a href="/SISGEBOO/public/admin/delegados/editar/{{$delegado->id}}" class="btn btn-sm btn-outline-primary my-2 my-sm-0">Editar</a>
								<a href="/SISGEBOO/public/admin/delegados/apagar/{{$delegado->id}}" class="btn btn-sm btn-outline-danger my-2 my-sm-0r">Apagar</a></td>

							</tr>
							@endforeach
						</tbody>

					</table>

					<div class="card-footer" align="center">
						{{$delegados->links()}}
					</div>

				</div>

			</div>
		</div>
	</main>

	@endsection
