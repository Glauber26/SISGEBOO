@extends('layouts.appDelegado')
@section('content')

<div class="container">
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






