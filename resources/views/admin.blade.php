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
                <div class="card-header">Dashboard - Delegado(Administrador)</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Você está logado como Delegado, seu perfil é um administrador!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
