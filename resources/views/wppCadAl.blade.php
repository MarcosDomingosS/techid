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
            <form action="{{route('cadastro.aluno')}}" method="post" enctype="multipart/form-data" class="form-cadastro">
                @csrf
                <h1 class="form-title-font">Cadastrar Aluno</h1>
                <label for="nome">Nome</label>
                <input type="text" placeholder="Nome:" id="nome" name="nm_aluno" value="{{ old('nm_aluno') }}">
                @error('nm_aluno')
                    <p class="error">{{ $message }}</p>
                @enderror

                <label for="rm">RM</label>
                <input type="number" placeholder="RM:" id="rm" name="nr_rm" value="{{ old('nr_rm') }}">
                @error('nr_rm')
                    <p class="error">{{ $message }}</p>
                @enderror

                <label for="foto">Foto:</label> <br>
                <input type="file" placeholder="Foto:" id="foto" name="img_aluno" value="{{ old('img_aluno') }}">
                @error('img_aluno')
                    <p class="error">{{ $message }}</p>
                @enderror <br>

                <label for="rfid">RFID</label>
                <input type="text" placeholder="RFID:" id="rfid" name="cd_rfid" value="{{ old('cd_rfid') }}">
                @error('cd_rfid')
                    <p class="error">{{ $message }}</p>
                @enderror

                <button type="submit">Cadastrar Usuário interno</button>
            </form>
    @else
    Não Pode entrar sem logar
    @endauth
</body>
</html>
