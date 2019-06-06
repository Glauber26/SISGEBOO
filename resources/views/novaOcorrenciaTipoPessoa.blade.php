@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">





      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://localhost/SISGEBOO/public/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">Identificação</a></li>
          <!--    <li class="breadcrumb-item active" aria-current="page">Seu Cadastro</li>-->
        </ol>
      </nav>


      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pessoa Física</h5>
              <p class="card-text">Cadastro destinado para vítimas e testemunhas que são caracterizadas como pessoa física</p>
              <a href="{{route('cadastro.pessoa.fisica')}}" class="btn btn-primary">Sou uma pessoa física, desejo prosseguir!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pessoa Jurídica</h5>
              <p class="card-text">Cadastro destinado para vítimas e testemunhas que são caracterizadas como pessoa Jurídica</p>
              <a href="#" class="btn btn-primary">Sou uma pessoa Jurídica, desejo prosseguir!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Estrangeiro</h5>
              <p class="card-text">Cadastro destinado para vítimas e testemunhas que são estrangeiras</p>
              <a href="{{route('cadastro.pessoa.estrangeira')}}" class="btn btn-primary">Sou um estrangeiro, desejo prosseguir!</a>
            </div>
          </div>
        </div>
      </div>




    </div>
  </div>
</div>
@endsection