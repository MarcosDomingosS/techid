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
            <form class="form-cadastro-evento" action="{{ route('editar.eventos', ['id'=>encrypt($evento->id_evento)]) }}" method="POST">
                @csrf
                @method('PUT')
                <h1 class="form-title-font">Editando o evento {{$evento->nm_evento}}</h1>
                <label for="nome">Nome do evento</label><br>
                <input type="text" name="nome" id="nome" value="{{ $evento->nm_evento }}"><br>
                <label for="data">Data do evento</label><br>
                <input type="datetime-local" name="data" id="data" min="{{ now()->format('Y-m-d\TH:i') }}" value="{{ $evento->dt_evento->format('Y-m-d\TH:i') }}">
                <div class="row-button">
                    <button type="submit">Editar</button>
                </div>
            </form>
            <form action="{{ route('deletar.eventos', ['id'=>encrypt($evento->id_evento)]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" style="color: red; background-color: rgb(233, 233, 233);&:hover{background-color:  rgb(205, 205, 205);cursor: pointer;}">Excluir</button>
            </form>
        </main>
    @else
    Não Pode entrar sem logar
    @endauth
</body>
</html>
