<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TechId</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>

<body>
    <x-header-landing-section />
    <main>
        <img src="{{ asset('img/img-login.png') }}">
        <form action="{{ route('login.submit') }}" method="post">
            @csrf
            <h1 class="title-font">Login</h1>
            <div class="form-input">
                <label for="cargo">Entrar como</label><br>
                <select name="ds_cargo" id="cargo">
                    <option value="{{ old('ds_cargo') == '' ? 'selected' : '' }}">Selecione o seu cargo</option>
                    <option value="Supervisor {{ old('ds_cargo') == 'Supervisor' ? 'selected' : '' }}">Supervisor</option>
                    <option value="Direção {{ old('ds_cargo') == 'Direção' ? 'selected' : '' }}">Direção</option>
                    <option value="Coordenação {{ old('ds_cargo') == 'Coordenação' ? 'selected' : '' }}">Coordenação</option>
                    <option value="Secretaria {{ old('ds_cargo') == 'Secretaria' ? 'selected' : '' }}" >Secretaria</option>
                    <option value="Professor {{ old('ds_cargo') == 'Professor' ? 'selected' : '' }}">Professor</option>
                </select><br>
                @error('ds_cargo')
                    <p class="error">{{ $message }}</p>
                @enderror
                <label for="emai">Email</label><br>
                <input type="email" id="email" name="ds_email" value="{{ old('ds_email') }}"><br>
                @error('ds_email')
                    <p class="error">{{ $message }}</p>
                @enderror
                <label for="senha">Senha</label><br>
                <input type="password" id="senha" name="cd_senha" {{ old('cd_senha') }}><br>
                @error('cd_senha')
                    <p class="error">{{ $message }}</p>
                @enderror
                <a href="#">Esqueceu sua senha?</a>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </main>
</body>
</html>
