<center><h2>Polícia Militar de Minas Gerais - PM/MG</h2>
	<h4>Sistema Gerenciador de Boletins de Ocorrência Online - SISGEBOO</h4>
	Ocorrência Furto de {{$obj->objeto_nome}} #00000{{$obj->id}}
</center>


	<div class="row">
		<div class="col-sm">
			<label>Número da ocorrêcia: <b>#00000{{$obj->id}}</b></label>
		</div>
		<div class="col-sm">
			<label>Tipo da Ocorrência: <b>{{$obj->furto_ou_perda}}</b></label>
		</div>
		<div class="col-sm">
			<label>Nome do Objeto: <b> {{$obj->objeto_nome}}</b></label>
		</div>
		<div class="col-sm">
			<label>Marca: <b> {{$obj->objeto_marca}}</b></label>
		</div>
		<div class="col-sm">
			<label>Data/Hora do furto: <b>{{$obj->dataRoubo}} {{$obj->horaRoubo}}</b></label>
		</div>
		<div class="col-sm">
			<label>Criação do BO: <b>{{$obj->created_at}}</b></label>
		</div>
	</div>

	<div class="row">
		<div class="col-sm">
			<label>Valor: <b>R${{$obj->objeto_valor}},00</b></label>
		</div>
		<div class="col-sm">
			<label>Marca: <b>{{$obj->objeto_marca}}</b></label>
		</div>
		<div class="col-sm">
			<label>Quantidade: <b>{{$obj->objeto_quantidade}}</b></label>
		</div>
		<div class="col-sm">
			<label>Cor: <b>{{$obj->objeto_cor}}</b></label>
		</div>
	</div>
</div>

<br><br>

<div class="container">

	<div class="row">
		<div class="col-sm">
			<b>Local do Furto</b><hr>A vítima <b>{{$obj->nome}} portador(a) do CPF: {{$obj->cpf}} e RG: {{$obj->ufrg}}{{$obj->rg}}</b> informa que o objeto {{$obj->objeto_nome}} da marca {{$obj->objeto_marca}} que custa proximadamente R$ {{$obj->objeto_valor}},00 foi furtado/perdido nas imediações da Rua: <b>{{$obj->rua}}</b>, localizada no bairro <b>{{$obj->bairro}}</b> na cidade de <b>{{$obj->cidade}}</b> no estado de <b>{{$obj->estado}}</b>
		</div>
	</div>
<br>
<br>
	<div class="row">
		<div class="col-sm">
			<b>Descrição da Ocorrência</b><hr>
			A vítima <b>{{$obj->nome}}</b> informa também a(s) descdrição da ocorrência "{{$obj->descricao_ocorrencia}}" e informa que <b>{{$obj->ameaca}}</b>, sofreu ameaça.
		</div>
	</div>
</div>


<br><br><br><br><br><br><br><br><br><br><center>Assinatura Delegado de Plantão</center>