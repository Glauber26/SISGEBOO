@extends('layouts.appDenuncia')

@section('naveg')
Ocorrências Furtos e Roubos de Objetos
@endsection

@section('denunciaNome')
Ocorrências Furto/Roubo de Objetos
@endsection

@section('denuncia')

		<table class="table table-striped table-hover" id="tabelapessoas">
			<thead align="center"> <!-- Cabeçalho da tabela -->
				<tr>

					<th>Nome</th>
					<th>Marca</th>
					<th>Cor</th>
					<th>Valor</th>
					<th>Furto ou Perda?</th>
					<th>Data Roubo</th>
					<th>Hora Roubo</th>
					<th>Vizualizar Ocorrência</th>
				</tr>
			</thead>

			<tbody align="center">
				@foreach($objs as $obj) <!-- Foreach responsável para colocar todas as informações de pessoas dentro da tabela -->
				<tr>

					<td>{{ $obj->objeto_nome }}</td>
					<td>{{ $obj->objeto_marca }}</td>
					<td>{{ $obj->objeto_cor }}</td>
					<td>{{ $obj->objeto_valor }}</td>
					<td>{{ $obj->furto_ou_perda }}</td>
					<td>{{ $obj->dataRoubo }}</td>
					<td>{{ $obj->horaRoubo }}</td>
					<td>
						<a href="http://localhost/SISGEBOO/public/admin/ocorrencias/objetos/visualizarbo/{{ $obj->id }}" class="btn btn-sm btn-outline-primary my-2 my-sm-0">Ver BO</a>
					</tr>
					@endforeach
				</tbody>
			</table>


			<div class="card-footer" align="center">
				{{$objs->links()}}	
			</div>

	@endsection