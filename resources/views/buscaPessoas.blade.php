@extends('layouts.appDelegado')

@section('content')


<main role="main">
  <div class="row" align="center">
    <div class="container">
      <div class="card border">
        <div class="card-header">
          <div class="card-title">
            Lista de Pessoas
          </div>
        </div>

        <table class="table table-bordered table-hover" id="tabelapessoas">
          <thead align="center"> <!-- Cabeçalho da tabela -->
            <tr>

              <th>Nome</th>
              <th>CPF</th>
              <th>RG</th>
              <th>Nascimento</th>
              <th>Função</th>
              <th>Email</th>
              <th>Rua</th>
              <th>Bairro</th>
              <th>Cidade</th>
              <th>Ações</th>
            </tr>
          </thead>

          <tbody align="center">
            @foreach($pessoas as $pessoa) <!-- Foreach responsável para colocar todas as informações de pessoas dentro da tabela -->
            <tr>

              <td>{{ $pessoa->name }}</td>
              <td>{{ $pessoa->cpf }}</td>
              <td>{{$pessoa->ufrg}} {{ $pessoa->rg }}</td>
              <td>{{ $pessoa->nascimento }}</td>
              <td>{{ $pessoa->email }}</td>
              <td>{{ $pessoa->rua }}</td>
              <td>{{ $pessoa->bairro }}</td>
              <td>{{ $pessoa->cidade }}</td>
              <td>{{ $pessoa->estado }}</td>
              <td>
                <a href="/SISGEBOO/public/admin/pessoas/editar/{{$pessoa->id}}" class="btn btn-sm btn-primary">Editar</a>
                <a href="/SISGEBOO/public/admin/pessoas/apagar/{{$pessoa->id}}" class="btn btn-sm btn-danger">Apagar</a></td>

              </tr>
              @endforeach
            </tbody>

          </table>
        </div>

      </div>
    </div>
  </main>

  @endsection
