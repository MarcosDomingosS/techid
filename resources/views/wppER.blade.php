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
        <main>
            <button class="back-button"><a href="/workplace/eventos">Voltar</a></button>
            <form action="{{ route('registro.eventos')}}" method="POST" class="form-cadastro-evento">
                @csrf
                <h1 class="form-title-font">Novo evento</h1>
                <label for="nome">Nome do evento</label>
                <input type="text" name="nome" id="nome">
                <label for="data">Data do evento</label>
                <input type="datetime-local" name="data" id="data" min="{{ now()->format('Y-m-d\TH:i') }}">
                <button type="submit">Registrar</button>
            </form>
        </main>
    @else
    Não Pode entrar sem logar
    @endauth
</body>
</html>
