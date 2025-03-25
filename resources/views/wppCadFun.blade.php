<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | TechID</title>
    <link rel="stylesheet" href="{{ asset('css/workPlace.css') }}">
</head>
<body class="grid">
    @php
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+';
        $random = substr(str_shuffle($caracteres), 0, 10);
    @endphp
    @auth
        <x-aside-work-place request="{{ $request }}"/>
        <main class="initial-main">
        <form action="{{route('cadastro.funcionario')}}" method="POST" class="form-cadastro">
            @csrf
            <h1 class="form-title-font">Cadastrar Usuário</h1>
            <label for="nome">Nome</label>
            <input type="text" placeholder="Nome:" id="nome" name="nm_usuario"
                value="{{ old('nm_usuario') }}">
            @error('nm_usuario')
                <p class="error">{{ $message }}</p>
            @enderror

            <label for="email">Email</label>
            <input type="email" placeholder="E-mail:" id="email" name="ds_email"
                value="{{ old('ds_email') }}">
            @error('ds_email')
                <p class="error">{{ $message }}</p>
            @enderror


            <label for="senha">Senha gerada (guarde ela)</label>
            <input id="senha" type="text" placeholder="Senha:" name="cd_senha"
                value="{{ $random }}">
            @error('cd_senha')
                <p class="error">{{ $message }}</p>
            @enderror

            <select name="ds_cargo" id="cargo">
                <option value="{{ old('ds_cargo') == '' ? 'selected' : '' }}">Selecione o seu cargo</option>
                <option value="Coordenação {{ old('ds_cargo') == 'Coordenação' ? 'selected' : '' }}">Coordenação
                </option>
                <option value="Secretaria" {{ old('ds_cargo') == 'Secretaria' ? 'selected' : '' }}>Secretaria
                </option>
                <option value="Professor" {{ old('ds_cargo') == 'Professor' ? 'selected' : '' }}>Professor</option>
            </select>
            @error('ds_cargo')
                <p class="error">{{ $message }}</p>
            @enderror

            <button type="submit">Cadastrar Usuário interno</button>
        </form>
        @else
        Não Pode entrar sem logar
        @endauth
    </body>
</html>
