@extends('layouts.appDelegado')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" align="center">Ocorrência Anônima #00000{{$denuncia->id}}</div>

        <div class="card-body">
          <div class="container" align="center">
            <div class="row">
              <div class="col-sm">
                <label>Número da ocorrêcia: <dt>#00000{{$denuncia->id}}</dt></label>
              </div>
              <div class="col-sm">
                <label>Tipo da Ocorrência: <dt>{{$denuncia->tipo}}</dt></label>
              </div>
              <div class="col-sm">
               <label>Data/Hora de Criação: <dt>{{$denuncia->created_at}}</dt></label>
             </div>
           </div>
         </div>

         <hr>

         <div class="container">
           <div class="row">
            <div class="col-sm">
              <dt>Observações</dt>Ocorrência foi registrada na base de dados da POLICIA MILITAR de Minas Gerais de forma online e anônima, através do Sistema Gerenciador de Boletins de Ocorrência Online- SISGEBOO
            </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-sm">
              <dt>O comunicante da ocorrência informa que </dt>
              {{$denuncia->descricao_ocorrencia}}
            </div>
            <div class="col-sm">
              <dt>Também informa a(s) descdrição(ões) do suseito </dt>
              {{$denuncia->descricao_suspeito}}
            </div>
          </div>
        </div>
      </div>

      <div class="card-footer"><a href="/SISGEBOO/public/imprimir/{{$denuncia->id}}"  class="btn btn-sm btn-outline-success my-2 my-sm-0">Emitir Boletin de Ocorrência</a></div>
    </div>
  </div>
</div>
</div>

@endsection
