<center><h2>Polícia Militar de Minas Gerais - PM/MG</h2>
	<h4>Sistema Gerenciador de Boletins de Ocorrência Online - SISGEBOO</h4>
</center>


<b>Ocorrência Furto de Veículo:</b> #00000{{$pessoa->id}}<br>
<b>Número da ocorrêcia: </b>#00000{{$pessoa->id}}<br>
<b>Tipo da Ocorrência: </b>PESSOA DESAPARECIDA<br>
<b>Criação do BO: </b>{{$pessoa->created_at}}<br>
<b>Nome: </b>{{$pessoa->nome}}<br>
<b>Nascimento: </b>{{$pessoa->nascimento}}<br>
<b>CPF: </b>{{$pessoa->cpf}}<br>
<b>RG: </b>{{$pessoa->ufrg}}{{$pessoa->rg}}<br>
<b>Telefone Familiares: </b>{{$pessoa->telefone}}<br>


<br>
<br>
<br>
<b>Local do Desaparecimento</b>
<hr>



<br>Os familiares da vítima <b>{{$pessoa->nome}}</b> informam seu desaparecimento po meio deste Boletim de Ocorrência, informam também que o ultimo local onde a vítima foi vista fica na Rua: <b>{{$pessoa->ultima_localizacao_rua}}</b>, localizada no bairro <b>{{$pessoa->ultima_localizacao_bairro}}</b> na cidade de <b>{{$pessoa->ultima_localizacao_cidade}}</b> no estado de <b>{{$pessoa->ultima_localizacao_estado}}</b>

<br>
<br>
<br>
<b>Contato com os familiares</b>
<hr>


Os familiares mais próxims a vítima <b>{{$pessoa->nome}}</b> rezidem no endereço: Rua <b>{{$pessoa->rua}}</b> no bairro <b>{{$pessoa->bairro}}</b>, na cidade de <b>{{$pessoa->cidade}}</b> localizada no estado de <b>{{$pessoa->estado}}</b>. 


O telefone para contato com os familiares em caso de novidades na investigação é o: <b>{{$pessoa->telefone}}</b>



<br><br><br><br><br><br><br><br><br><br><center>Assinatura Delegado de Plantão</center>















