<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HealthyApp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #cce3f6;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    HealthyApp
                </div>
                Soy una app que almacena información de la historia clínica de mis pacientes y que ayuda al personal sanitario.<br>
                <br><div class="links">
                    <a href="https://laravel.com/docs">Regístrarse</a>
                    <a href="https://laracasts.com">Iniciar Sesión</a>
                    <a href="https://laravel-news.com">Ayuda</a>
                    <a href="https://blog.laravel.com">Más sobre mí</a>
                    <a href="https://nova.laravel.com">Contacto</a>

                </div><br>
                Antonio Jiménez Núñez<br>
                Cristina Morillo Cabezas<br>
                <br> Somos estudiantes del Grado de Ingeniería de la Salud, concretamente de la mención de informática clínica
            </div>
        </div>
    </body>
</html>
