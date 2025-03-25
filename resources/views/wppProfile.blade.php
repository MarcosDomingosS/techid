<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de {{ $aluno->nm_aluno }}</title>
    <link rel="stylesheet" href="{{ asset('css/workPlace.css') }}">
</head>
<body>
    <x-aside-work-place request="{{ $request }}"/>
    <main class="profile">
        <h1>Perfil do Aluno</h1><br>
        <p><strong>Nome:</strong> {{ $aluno->nr_rm }}</p><br>
        <p><strong>Email:</strong> {{ $aluno->nm_aluno }}</p><br>
        <p><strong>RFID:</strong> {{ $aluno->cd_rfid }}</p><br>
        <img src="{{ asset('storage/' . $aluno->img_aluno) }}" alt="Foto de {{ $aluno->nm_aluno }}" width="150">
    </main>
</body>

</html>
