<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SISGEBOO</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    SISGEBOO
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">


                     <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Administrativo Delegacia
                      </a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Delegados</a>
                          <a class="dropdown-item" href="{{route('policial.dashboard')}}">Dashboard Policiais</a>
                          <a class="dropdown-item" href="{{route('pessoa.dashboard')}}">Dashboard Pessoa</a>
                      </div>

                  </li>

                  <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Policial
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('cadastro.policial')}}">Cadastrar Policial</a>
                        <a class="dropdown-item" href="{{route('busca.policiais')}}">Listar Policiais</a>
                    </div>

                </li>


                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Delegado
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('cadastro.delegado')}}">Cadastrar Delegado</a>
                        <a class="dropdown-item" href="{{route('busca.delegados')}}">Listar Delegados</a>
                    </div>

                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pessoas
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('busca.pessoas')}}">Listar Pessoas Física</a>
                        <a class="dropdown-item" href="{{route('busca.pessoas.juridica')}}">Listar Pessoas Jurídicas</a>
                        <a class="dropdown-item" href="{{route('busca.pessoas.estrangeira')}}">Listar Pessoas Estrangeiras</a>
                    </div>

                </li>


                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ocorrências
                    </a>


                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('busca.ocorrencias.anonimas')}}">Listar Ôcorrências Anônimas</a>
                        <a class="dropdown-item" href="{{route('busca.furto.veiculo')}}">Ocorrências de Furto de Veículos</a>
                        <a class="dropdown-item" href="{{route('obj.busca')}}">Ocorrências de Furto de Objetos</a>
                        <a class="dropdown-item" href="{{route('doc.busca')}}">Ocorrências de Furto de Documentos</a>
                        <a class="dropdown-item" href="{{route('acidente.busca')}}">Ocorrências de Acidentes de Trânsito</a>
                        <a class="dropdown-item" href="{{route('pessoa.desaparecida.busca')}}">Ocorrências de Pessoas Desaparecidas</a>
                    </div>

                </li>



            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pessoa.login') }}">Já é cadastrado? Logue-se</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cadastro.selecionar.pessoa') }}">Abrir Ocorrência</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</div>
</nav>

<main class="py-4">
    @yield('content')
</main>
</div>
</body>
</html>
