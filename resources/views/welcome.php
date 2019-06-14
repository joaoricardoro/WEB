<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Meu trabalho Tópicos II</title>

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        -->
        <!-- Styles -->
        <style>
            *{margin: 0; padding: 0;}

            body{font-family: helvetica, arial;
                font-size: 16px;
                color: #e3342f;}

            header{height: 90px;
                background-color: #262626;
                padding: 10px 0;}

            footer{height: 50px;
                background-color: #44b874;
                padding: 10px 0;
                text-align: center;
                font-size: 12px;
                color:#333;}

            /*Classe do Container*/
            .container{margin: 0 auto;
                width: 960px;}

            /*ID*/
            #conteudo{padding: 50px 0;}

            /*ID Menu*/
            #menu{float: right;
                padding: 35px 0px;}

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            #menu a{text-decoration: none;
                
                    padding: 45 45px;
                    color: #f6993f;
                    text-shadow: 1px #111}

            #menu a:hover{background-color: #44b874;}
           /* html, body {
                background-color: #fff;
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
            }*/
        </style>
    </head>
    <body>

        <!-- 
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
        -->
        <header>

            <div class="container">
                <a href= "#"><img src="#" title="logo" alt="logo"></a>               

                <div class="menu">
                    <a>Cursos</a>
                    <a>Alunos</a>
                    <a>Matrículas</a>
                    <!-- other pages -->
                    <!-- 
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                    -->
                </div>
            </div>
            
        </header>
        <div id="conteudo" class="container">    
        <!-- </div>-->
    </body>
    <footer>
	<div class="container">
		Criado por João Ricardo, Julia Rodrigues e Mauro Raibida.
	</div>
    </footer>
</html>
