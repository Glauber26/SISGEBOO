<center><h2>Polícia Militar de Minas Gerais - PM/MG</h2>
	<h4>Sistema Gerenciador de Boletins de Ocorrência Online - SISGEBOO</h4>
</center>

<b>Número da ocorrêcia:</b> #00000{{$veiculo->id}}<br>
<b>Tipo da Ocorrência:</b> FURTO DE VEÍCULO<br>
<b>Veículo Público:</b> {{$veiculo->publico}}<br>
<b>Categoria:</b> {{$veiculo->categoria}}<br>
<b>Data/Hora do furto:</b> {{$veiculo->dataRoubo}} / {{$veiculo->horaRoubo}}<br>
<b>Criação do BO:</b> {{$veiculo->created_at}}<br>
<b>Tipo:</b> {{$veiculo->tipo}}<br>
<b>Marca:</b> {{$veiculo->marca}}<br>
<b>Placa:</b> {{$veiculo->placa}}<br>
<b>Cor:</b> {{$veiculo->objeto_cor}}<br>
<b>Chassi:</b> {{$veiculo->chassi}}<br>
<b>Renavam:</b> {{$veiculo->renavam}}<br>


<br><br>
<b>Local do Furto</b>
<hr>


A vítima <b>{{$veiculo->nome}}</b> informa que o local onde o veículo foi roubado fica na Rua: <b>{{$veiculo->rua_roubo}}</b>, localizada no bairro <b>{{$veiculo->bairro_roubo}}</b> na cidade de <b>{{$veiculo->cidade_roubo}}</b> no estado de <b>{{$veiculo->estado_roubo}}</b>
<br><br><br>

<b>Descrição dos fatos segundo a vítima</b>
<hr>
A vítima <b>{{$veiculo->nome}}</b> que rezide no endereço: Rua <b>{{$veiculo->rua}}</b> no bairro <b>{{$veiculo->bairro}}</b>, na cidade de <b>{{$veiculo->cidade}}</b> localizada no estado de <b>{{$veiculo->estado}}</b> informa os detalhes da ocorrência: 
<b>{{$veiculo->descricao_ocorrencia}}</b>

Também informa a(s) descdrição(ões) do suseito <br>
{{$veiculo->descricao_suspeito}} e informa que <b>{{$veiculo->ameaca}}</b>, sofreu ameaça.




<br><br><br><br><br><br><br><br><br><br><center>Assinatura Delegado de Plantão</center>








