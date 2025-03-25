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
        <x-aside-work-place request="{{ $request }}" />
        <main class="table">
        <h1>Sábados Letivos</h1>
        <table>
            <tr class="trLinha">
                <td class="tdTitulo">Nome:</td>
                <td class="tdTitulo">Rm:</td>
                <td class="tdTitulo">RFID:</td>
            </tr>
            @foreach ($alunos as $aluno)
            <tr class="trAluno">
                <td class="tdPerfil"><a href="{{route('aluno.profile',['nr_rm'=>$aluno->nr_rm])}}">{{$aluno->nm_aluno}}</a></td>
                <td>{{$aluno->nr_rm}}</td>
                <td>{{$aluno->cd_rfid}}</td>
            </tr>
            @endforeach
        </table>
        <select name="classe" id="classeSelect">
            <option>Selecione a classe/curso</option>
            <option>1ds2</option>
            <option>1ds3</option>
            <option>2ds2</option>
            <option>2ds3</option>
            <option>3ds3</option>
        </select><br>
        <button class="button-table"><a href="{{route('aluno.export')}}">Exportar para CSV</a></button>
        </main>
    @else
        Não Pode entrar sem logar
    @endauth
</body>

</html>
