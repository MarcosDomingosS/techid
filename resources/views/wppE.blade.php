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
            <button class="add-event"><a href="/workplace/eventos/registro" >Adicionar evento</a></button>
                <div class="section-add-event">
                    @forelse ($eventos as $evento)
                    <div class="events">
                        <h4>{{$evento->nm_evento}}</h4>
                        <p>{{$evento->dt_evento->format('d/m/Y')}}</p>
                        <button>
                            <a href="{{route('acesso.eventos.especifico', ['id' => encrypt($evento->id_evento)])}}">Visualizar</a>
                        </button>
                    </div>
                    @empty
                        <p class="empty">Você ainda não tem nenhum evento marcado. <a href="/workplace/eventos/registro">Clique aqui para marcar algum evento!</a></p>
                    @endforelse
                </div>
        </main>
    @else
    Não Pode entrar sem logar
    @endauth
</body>
</html>
