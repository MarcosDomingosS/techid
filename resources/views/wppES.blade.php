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
        <h1 class="title-font-event">Eventos</h1>
            <div class="event">
                <p>Nome do evento: {{$evento->nm_evento}}</p>
                <p>Data do evento: {{$evento->dt_evento->format('d/m/Y, h:i')}}h</p>
                <p>Data de criação do evento: {{$evento->created_at->format('d/m/Y, h:i')}}h</p>
                <p>Data de edição do evento: {{$evento->updated_at->format('d/m/Y, h:i')}}h</p>
                <div class="event-buttons">
                    <button>
                    <a href="{{route('acesso.eventos.editar', ['id' => encrypt($evento->id_evento)])}}">Editar</a>
                    </button>
                    <button><a href="/workplace/eventos">Voltar</a>
                </div>
            </div>
        </main>
    @else
    Não Pode entrar sem logar
    @endauth
</body>
</html>
