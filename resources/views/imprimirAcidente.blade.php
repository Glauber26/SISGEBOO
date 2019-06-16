<center><h2>Polícia Militar de Minas Gerais - PM/MG</h2>
	<h4>Sistema Gerenciador de Boletins de Ocorrência Online - SISGEBOO</h4>
</center>

<b>Acidente de Trânsito</b> #00000{{$acidente->id}}<br>
<b>Tipo da Ocorrência:</b> ACIDENTE DE TRÂNSITO<br>
<b>Criação do BO:</b> {{$acidente->created_at}}<br>
<b>Nome do Condutor:</b> {{$acidente->nome}}<br>
<b>Nascimento:</b> {{$acidente->nascimento}}<br>
<b>CPF:</b> {{$acidente->cpf}}<br>
<b>RG:</b> {{$acidente->ufrg}}{{$acidente->rg}}<br>
<b>Telefone Condutor:</b> Não Informado<br>
</div>
<br><br>


<b>Local do Acidente</b><hr>
O condutor do veículo <b>{{$acidente->nome}}</b> informa por meio deste Boletin de Ocorrência, o acidente ocorrido na Rua: <b>{{$acidente->rua}}</b>, localizada no bairro <b>{{$acidente->bairro}}</b> na cidade de <b>{{$acidente->cidade}}</b> no estado de <b>{{$acidente->estado}}</b> no local <b>{{$acidente->descricao_local}}</b>

<br>
<br>
<br>

<b>Detalhes da Ocorrência</b>
<hr>
O condutor {{$acidente->nome}}</b> informa os detalhes do acidente "{{$acidente->descricao_ocorrencia}}".
<br>
O condutor tambem informa que, <b>{{$acidente->vitimas}}</b> teve <b>{{$acidente->quant_vitimas}}</b> vitima(s)

<br><br><br><br><br><br><br><br><br><br><center>Assinatura Delegado de Plantão</center>