<center><h2>Polícia Militar de Minas Gerais - PM/MG</h2>
	<h4>Sistema Gerenciador de Boletins de Ocorrência Online - SISGEBOO</h4>
</center>
			<div class="row">
				<div class="col-sm">
					<label>Número da ocorrêcia: <b>#00000{{$doc->id}}</b></label>
				</div>
				<div class="col-sm">
					<label>Tipo da Ocorrência: <b>{{$doc->furto_ou_perda}}</b></label>
				</div>
				<div class="col-sm">
					<label>Criação do BO: <b>{{$doc->created_at}}</b></label>
				</div>
				<div class="col-sm">
					<label>Nome no Documento: <b>{{$doc->doc_nome}}</b></label>
				</div>
				<div class="col-sm">
					<label>Documento Perdido: <b>{{$doc->tipo}}</b></label>
				</div>
				<div class="col-sm">
					<label>Numero do Documento: <b>{{$doc->doc_numero}}</b></label>
				</div>
				<div class="col-sm">
					<label>Nascimento: <b>{{$doc->nascimento}}</b></label>
				</div>
				<div class="col-sm">
					<label>Telefone Vítima: <b>{{$doc->telefone}}</b></label>
				</div>
			</div>
		</div>

		<br>
		<br>
		<br>

		<div class="container">

			<div class="row">
				<div class="col-sm">
					<b>Local da/o {{$doc->furto_ou_perda}}<hr></b> A vitima  <b>{{$doc->doc_nome}}</b> informa por meio deste Boletin de Ocorrência, o local onde acredita ter perdido seu documento. Rua: <b>{{$doc->rua}}</b>, localizada no bairro <b>{{$doc->bairro}}</b> na cidade de <b>{{$doc->cidade}}</b> no estado de <b>{{$doc->estado}}</b>.
				</div>
			</div>

	
<br>
<br>
			<div class="row">
				<div class="col-sm">
					<b>Descrição do Ocorrência</b><hr> A vitima <b>{{$doc->doc_nome}}</b> informa os detalhes da ocorrência "{{$doc->descricao_ocorrencia}}"
				</div>
			</div>
		</div>
	</div>
<br><br><br><br><br><br><br><br><br><br><center>Assinatura Delegado de Plantão</center>