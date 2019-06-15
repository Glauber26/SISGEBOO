@extends('layouts.appDenuncia')

@section('denunciaNome')
Veículos Furtados
@endsection

@section('denuncia')
<div class="card">
	<div class="card-header" align="center">Ocorrências Furto de Veículo</div>
	<div class="card-body">
		<table class="table table-striped table-hover" id="tabelapessoas">
			<thead align="center"> <!-- Cabeçalho da tabela -->
				<tr>

					<th>Placa</th>
					<th>Ano de Fabricação</th>
					<th>Categoria</th>
					<th>Tipo</th>
					<th>Marca</th>
					<th>Cor</th>
					<th>Data Roubo</th>
					<th>Hora Roubo</th>
					<th>Vizualizar Ocorrência</th>
				</tr>
			</thead>

			<tbody align="center">
				@foreach($veiculoFurtado as $veiculo) <!-- Foreach responsável para colocar todas as informações de pessoas dentro da tabela -->
				<tr>

					<td>{{ $veiculo->placa }}</td>
					<td>{{ $veiculo->anofabricacao }}</td>
					<td>{{ $veiculo->categoria }}</td>
					<td>{{ $veiculo->tipo }}</td>
					<td>{{ $veiculo->marca }}</td>
					<td>{{ $veiculo->objeto_cor }}</td>
					<td>{{ $veiculo->dataRoubo }}</td>
					<td>{{ $veiculo->horaRoubo }}</td>
					<td>
						<a href="http://localhost/SISGEBOO/public/admin/ocorrencias/furto/veiculos/visualizarbo/{{ $veiculo->id }}" class="btn btn-sm btn-outline-primary my-2 my-sm-0">Ver BO</a>
					</tr>
					@endforeach
				</tbody>
			</table>


			<div class="card-footer" align="center">
				{{$veiculoFurtado->links()}}	
			</div>


			</div>
		</div>
	</div>
	@endsection