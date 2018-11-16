
@extends('layouts.app')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carmen Alto</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="css/welcome.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="img/logoca1.png" />
                </div>

                <div class="links">

                  <!--
                        <a href="#" class="resenia">
                          Reseña Histórica
                          <ul class="listareseña">
                            <li><a href="#">fsdfsf</a></li>
                            <li><a href="#">tyyyyy</a></li>
                          </ul>
                        </a>
                  -->

                    <a href="{{ route('reseña') }}">Reseña Histórica</a>
                    <a href="{{ route('municipalidad') }}">MUNICIPALIDAD</a>
                    <a href="https://laracasts.com">GERENCIA</a>
                    <a href="https://laravel-news.com">TRANSPARENCIA</a>
                    <a href="https://nova.laravel.com">SERVICIOS</a>

                </div>
            </div>
        </div>
    </body>
</html>
