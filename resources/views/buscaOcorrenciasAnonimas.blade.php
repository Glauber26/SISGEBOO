@extends('layouts.appDelegado')

@section('content')

<div class="container">

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="http://localhost/SISGEBOO/public/admin">Dashboard Admin</a></li>
			<li class="breadcrumb-item active" aria-current="page">Ocorrências Anônimas</a></li>
		</ol>
	</nav>

	<div class="row justify-content-center align">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" align="center">Ocorrências Anônimas - Exibindo {{$ocorrencias->count()}} ocorrências de {{$ocorrencias->total()}}</div>

				<table class="table table-striped table-hover" id="tabelaocorrencias">
					<thead align="center"> <!-- Cabeçalho da tabela -->
						<tr>
							<th>Tipo</th>
							<th>Rua</th>
							<th>Bairro</th>
							<th>Cidade</th>
							<th>Estado</th>
							<th>Descrição dos Suspeitos</th>
							<th>Descrição dos Acontecimentos</th>
							<th>Visualizar</th>
						</tr>
					</thead>

					<tbody align="center">
						@foreach($ocorrencias as $ocorrencia) <!-- Foreach responsável para colocar todas as informações de ocorrencias dentro da tabela -->
						<tr>
							<td>{{ $ocorrencia->tipo }}</td>
							<td>{{ $ocorrencia->rua }}</td>
							<td>{{ $ocorrencia->bairro }}</td>
							<td>{{ $ocorrencia->cidade }}</td>
							<td>{{ $ocorrencia->estado }}</td>
							<td>{{ $ocorrencia->descricao_suspeito }}</td>
							<td>{{ $ocorrencia->descricao_ocorrencia }}</td>
							<td>
								<a href="/SISGEBOO/public/admin/ocorrencias/anonimas/visualizar/{{$ocorrencia->id}}" class="btn btn-sm btn-outline-primary my-2 my-sm-0">Visualizar Ocorrência</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="card-footer" align="center">
					{{$ocorrencias->links()}}
				</div>
			</div>


		</div>
	</div>
</div>



@endsection
