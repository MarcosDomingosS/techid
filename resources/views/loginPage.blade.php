<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TechId</title>
    <link rel="stylesheet" href="{{ asset('css/login-button.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>

<body>
    <x-header-landing-section />
    <main>
        <img src="{{asset('img/img-login.png')}}">
        <div class="form">
            <form action="">
                <h1 class="title-font">Login</h1>
                <button>
                    <img src="{{asset('img/icon-ca.png')}}">
                    <a href="{{route('login.academico')}}">Corpo Acadêmico </a>
                </button>
                <br>
                <button>
                    <img src="{{asset('img/icon-responsáveis.png')}}">
                    <a href="{{route('login.responsavel')}}">Responsáveis</a>
                </button>
                <br>
                <p>Ainda não tem um login? <a href="{{route('acesso.dev.signup')}}">Cadastre-se</a></p>
            </form>
        </div>
    </main>
</body>

</html>
