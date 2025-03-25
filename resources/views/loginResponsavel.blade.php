<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Document</title>
</head>
<body>
    <x-header-landing-section/>
    <main>
        <img src="{{ asset('img/img-login.png') }}">
        <form action="{{ route('login.submit') }}" method="post">
            @csrf
            <h1 class="title-font">Login</h1>
            <div class="form-input">
                <label for="rm">RM</label><br>
                <input type="number" id="rm" name="rm"><br>
                <label for="senha">Senha</label><br>
                <input type="password" id="senha" name="senha"><br>
                <a href="">Esqueceu sua senha?</a><br>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </main>
    <x-footer-section/>
</body>
</html>
