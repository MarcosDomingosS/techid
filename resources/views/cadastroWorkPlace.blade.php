<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Cadastrar Usuários | TechID</title>
</head>

<body>
    @if ($request == 'Aluno')
        <form action="{{route('cadastro.aluno')}}" method="post">
            @csrf
            <h1 class="title-font">Cadastrar Aluno</h1>
            <div class="form-input">

                <input type="text" placeholder="Nome:" id="nome" name="nm_aluno" value="{{ old('nm_aluno') }}">
                @error('nm_aluno')
                    <p class="error">{{ $message }}</p>
                @enderror

                <input type="email" placeholder="E-mail:" id="email" name="ds_email_aluno"
                    value="{{ old('ds_email_aluno') }}">
                @error('ds_email_aluno')
                    <p class="error">{{ $message }}</p>
                @enderror

                <input id="senha" type="password" placeholder="Senha:" name="cd_senha"
                    value="{{ old('cd_senha') }}">
                @error('cd_senha')
                    <p class="error">{{ $message }}</p>
                @enderror

                <input id="cSenha" type="password" placeholder="Confirmar Senha:" name="confSenha"
                    value="{{ old('confSenha') }}">
                @error('confSenha')
                    <p class="error">{{ $message }}</p>
                @enderror

                <button type="submit">Cadastrar Usuário interno</button>
            </div>
        </form>
    @elseif ($request == 'Funcionario')
        {{-- <img src="{{asset('img/img-login.png')}}" alt="Imagem Ilustrativa"> --}}
        <form action="{{route('cadastro.funcionario')}}" method="POST">
            @csrf
            <h1 class="title-font">Cadastrar Usuário</h1>
            <div class="form-input">

                <input type="text" placeholder="Nome:" id="nome" name="nm_usuario"
                    value="{{ old('nm_usuario') }}">
                @error('nm_usuario')
                    <p class="error">{{ $message }}</p>
                @enderror

                <input type="email" placeholder="E-mail:" id="email" name="ds_email"
                    value="{{ old('ds_email') }}">
                @error('ds_email')
                    <p class="error">{{ $message }}</p>
                @enderror

                <input id="senha" type="password" placeholder="Senha:" name="cd_senha"
                    value="{{ old('cd_senha') }}">
                @error('cd_senha')
                    <p class="error">{{ $message }}</p>
                @enderror

                <input id="cSenha" type="password" placeholder="Confirmar Senha:" name="confSenha"
                    value="{{ old('confSenha') }}">
                @error('confSenha')
                    <p class="error">{{ $message }}</p>
                @enderror
                <br>
                <select name="ds_cargo" id="cargo">
                    <option value="{{ old('ds_cargo') == '' ? 'selected' : '' }}">Selecione o seu cargo</option>
                    <option value="Coordenação {{ old('ds_cargo') == 'Coordenação' ? 'selected' : '' }}">Coordenação
                    </option>
                    <option value="Secretaria" {{ old('ds_cargo') == 'Secretaria' ? 'selected' : '' }}>Secretaria
                    </option>
                    <option value="Professor" {{ old('ds_cargo') == 'Professor' ? 'selected' : '' }}>Professor</0option>
                </select><br>
                @error('ds_cargo')
                    <p class="error">{{ $message }}</p>
                @enderror

                <button type="submit">Cadastrar Usuário interno</button>
            </div>
        </form>
    @else
        <h1>Requisição não recebida</h1>
    @endif
</body>

</html>
