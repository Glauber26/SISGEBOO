@extends('layouts.appDenuncia')

@section('denunciaNome')
Documento
@endsection

@section('denuncia')

		<table class="table table-striped table-hover" id="tabeladocs">
			<thead align="center"> <!-- Cabeçalho da tabela -->
				<tr>

					<th>Nome Registrado no Documento</th>
					<th>Documento</th>
					<th>Número Documento</th>
					<th>Perda ou Furto?</th>
					<th>Nascimento</th>
					<th>Visualizar BO</th>
				</tr>
			</thead>

			<tbody align="center">
				@foreach($docs as $doc) <!-- Foreach responsável para colocar todas as informações de docs dentro da tabela -->
				<tr>
					<td>{{ $doc->doc_nome }}</td>
					<td>{{ $doc->tipo }}</td>
					<td>{{ $doc->doc_numero }}</td>
					<td>{{ $doc->furto_ou_perda }}</td>
					<td>{{ $doc->nascimento }}</td>
					<td>
						<a href="http://localhost/SISGEBOO/public/admin/ocorrencias/documentos/visualizarbo/{{ $doc->id }}" class="btn btn-sm btn-outline-primary my-2 my-sm-0">Ver BO</a>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="card-footer" align="center">
				{{$docs->links()}}	
			</div>

	@endsection