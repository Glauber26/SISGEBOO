@extends('layouts.app')
@section('content')





<div class="container">

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="http://localhost/SISGEBOO/public/pessoa">Dashboard Pessoa</a></li>
			@yield('linkantigo')
			<li class="breadcrumb-item active" aria-current="page">@yield('naveg')</a></li>
		</ol>
	</nav>

	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" align="center">@yield('denunciaNome')</div>
				<div class="card-body">
					@yield('denuncia')
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
