@extends('layouts.appDelegadoDash')

@section('content')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard Admin</a></li> 
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard - Delegado | Administrador</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h4>Ocorrências mais constantes</h4> <h6>Junho de 2019</h6><hr>

                    <b>Veículos furtados:</b> {{$veiculoFurtado}}<br>
                    <b>Documentos perdidos ou furtados:</b> {{$docs}}<br>
                    <b>Objetos perdidos ou furtados:</b> {{$objs}}<br>
                    <b>Acidentes de Trânsito:</b> {{$acidentes}}<br>
                    <b>Denuncias Anônimas:</b> {{$anonimas}}<br>
                    <b>Pessoas Desaparecidas:</b> {{$desaparecidas}}<br><br><br>
                    <b><center><h4>{{$maior1}} {{$maior}} BO's</h4></center></b>


                </div>


              <div class="card-footer" align="center"><a href="http://localhost/SISGEBOO/public/admin/imprimir"  class="btn btn-sm btn-outline-success my-2 my-sm-0">Emitir Ocorrências mais constantes</a></div></div>
            



        </div>
    </div>
</div>




@endsection
