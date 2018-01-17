<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                padding: 0 25px;
            }

            .top-right > a {
                text-decoration: none;
                color: #636b6f;
                padding: 0 20px;
                font-size: 11px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-transform: uppercase;
            }

            .content {
                text-align: center;
                position: absolute;

            }

            .title {
                font-size: 84px;
            }

            .links {
                text-align: center;
                postion: relative;
                margin-top: 600px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }

            .m-b-md {
                margin-bottom: 100px;
            }



        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Logar</a>
                        <a href="{{ url('/register') }}">Registrar</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img style="width: 410px;" src="../../images/simplesVet.png" alt="SimplesVet">
                </div>
            </div>

                <div class="links">
                    <a href="https://simples.vet/conheca/clinica-petshop/">Conheça</a>
                    <a href="https://simples.vet/precos/">Preços</a>
                    <a href="https://simples.vet/depoimentos/">Depoimentos</a>
                    <a href="http://blog.simples.vet/">Blog</a>
                    <a href="https://simples.vet/trabalhe-conosco/">Trabalhe Conosco</a>
                </div>
        </div>
    </body>
</html>
