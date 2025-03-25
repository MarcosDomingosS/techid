<!DOCTYPE html>
<html lang="pt-br ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="{{asset('css/workPlace.css')}}">
</head>
<body class="grid">
    @auth
    <x-aside-work-place request="{{ $request }}"/>
    <main class="table">
        <h1>Biblioteca</h1>
        <table>
            <tr>
                <td class="tdTitulo">Nome:</td>
                <td class="tdTitulo">Rm:</td>
                <td class="tdTitulo">RFID:</td>
            </tr>
            @foreach ($alunos as $aluno)
            <tr class="trAluno">
                <td><a href="{{route('aluno.profile',['nr_rm'=>$aluno->nr_rm])}}">{{$aluno->nm_aluno}}</a></td>
                <td>{{$aluno->nr_rm}}</td>
                <td>{{$aluno->cd_rfid}}</td>
            </tr>
            @endforeach
        </table>
        <button class="button-table"><a href="{{route('aluno.export')}}">Exportar para CSV</a></button>
    </main>
    @else
    Não Pode entrar sem logar
    @endauth
</body>
</html>
