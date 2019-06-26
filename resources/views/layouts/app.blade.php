<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HealthyApp</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-HealthyApp">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{'HealthyApp' }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {!! Form::open(['route' => 'alarmas.store', 'method' => 'post']) !!}
                {!!   Form::submit('Alarma', ['class'=> 'btn btn-primary'])!!}
                {!! Form::close() !!}
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>


                    <ul class="nav navbar-nav navbar-right">


                    <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login &nbsp </a></li>
                            <li><a href="{{ url('/register') }}"> Registrar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/medicos') }}">
                                            Medicos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/especialidades') }}">
                                            Especialidades
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/pacientes') }}">
                                            Pacientes
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/enfermedades') }}">
                                            Enfermedades
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/tratamientos') }}">
                                            Tratamientos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/medicamentos') }}">
                                            Medicamentos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/enf_pacs') }}">
                                            Enfermedades de los pacientes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/trat_meds') }}">
                                            Tratamientos con sus medicamentos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/alarmas') }}">
                                            Lista de Alarmas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
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
