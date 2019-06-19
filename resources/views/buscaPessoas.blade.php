@extends('layouts.appDelegado')

@section('content')


<main role="main">
  <div class="row" align="center">
    <div class="container">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://localhost/SISGEBOO/public/admin">Dashboard Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Pessoas Físicas</a></li>
        </ol>
      </nav>

      <div class="row justify-content-center">
        <div class="col-md">
          <div class="card border">
            <div class="card-header">
              <div class="card-title text-center">
                Lista de Pessoas Físicas
                <!--<form class="form-inline float-right">
                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" align="left ">
                 <a href="#" class="btn btn-outline-success my-2 my-sm-0">Search</a>
               </form>-->
             </div>
           </div>

           <table class="table table-striped table-hover" id="tabelapessoas">
            <thead align="center"> <!-- Cabeçalho da tabela -->
              <tr>

                <th>Nome</th>
                <th>CPF</th>
                <th>Nascimento</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Ações</th>
              </tr>
            </thead>

            <tbody align="center">
              @foreach($pessoas as $pessoa) <!-- Foreach responsável para colocar todas as informações de pessoas dentro da tabela -->
              <tr>

                <td>{{ $pessoa->name }}</td>
                <td>{{ $pessoa->cpf }}</td>
                <td>{{ $pessoa->nascimento }}</td>
                <td>{{ $pessoa->email }}</td>
                <td>{{ $pessoa->cidade }}/{{ $pessoa->estado }}</td>
                <td>
                  <a href="/SISGEBOO/public/admin/pessoas/editar/{{$pessoa->id}}" class="btn btn-sm btn-outline-primary my-2 my-sm-0">Editar</a>
                  <a href="/SISGEBOO/public/admin/pessoas/apagar/{{$pessoa->id}}" class="btn btn-sm btn-outline-danger my-2 my-sm-0r">Apagar</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="card-footer" align="center">
              {{$pessoas->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</main>

@endsection
