<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | TechID</title>
    <link rel="stylesheet" href="{{ asset('css/workPlace.css') }}">
</head>
<body class="grid">
    @auth
        <x-aside-work-place request="{{ $request }}"/>
        <main class="initial-main">
            <div class="greetings">
                <h1 class="title-font">BEM-VINDO!</h1>
                <h2 style="text-transform: uppercase">O QUE VAMOS FAZER HOJE, {{Auth::user()->name}}?</h2>
            </div>
            <img src="{{ asset('img/img-book.png') }}">
        </main>
    @else
    Não Pode entrar sem logar
    @endauth
</body>
</html>
