<center><h2>Polícia Militar de Minas Gerais - PM/MG</h2>
<h4>Sistema Gerenciador de Boletins de Ocorrência Online - SISGEBOO</h4>

</center>

<b>Ocorrência Anônima:</b> #00000{{$denuncia->id}} <br>
<b>Tipo da Ocorrência: </b>{{$denuncia->tipo}} <br>
<b>Data/Hora de Criação: </b>{{$denuncia->created_at}}

<br>
<br>
<br>

<b>Local para averiguação da Denuncia</b><hr>
<b>O comunicante informa que o local para averiguação da denuncia fica na</b> Rua: {{$denuncia->rua}}, localizada no bairro {{$denuncia->bairro}} na cidade de {{$denuncia->cidade}} no estado de {{$denuncia->estado}}


<br>
<br>
<br>
<b>Descrição da Ocorrência e Suspeitos</b><hr>
<b>O comunicante informa que: </b>{{$denuncia->descricao_ocorrencia}}
<b> e também informa a(s) descdrição(ões) do suseito(s): </b>{{$denuncia->descricao_suspeito}}


<br>
<br>
<br> 
<b>Observações</b><hr>
Ocorrência foi registrada na base de dados da POLICIA MILITAR de Minas Gerais de forma online e anônima, através do Sistema Gerenciador de Boletins de Ocorrência Online - SISGEBOO