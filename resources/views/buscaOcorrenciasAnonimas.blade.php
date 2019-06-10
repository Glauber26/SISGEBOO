@extends('layouts.appDelegado')

@section('content')


<main role="main">
	<div class="row" align="center">
		<div class="container">
			<div class="card border">
				<div class="card-header">
					<div class="card-title">
						Lista de Ocorrências Anônimas
					</div>
				</div>

				<table class="table table-bordered table-hover" id="tabelaocorrencias">
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
								<a href="/SISGEBOO/public/admin/ocorrencias/anonimas/visualizar/{{$ocorrencia->id}}" class="btn btn-sm btn-primary">Visualizar Ocorrência</a>
							</tr>
							@endforeach
						</tbody>

					</table>
				</div>

			</div>
		</div>
	</main>

	@endsection
