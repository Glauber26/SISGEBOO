@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard - Pessoa</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Você está logado como uma Pessoa!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
