<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Contate-nos | TechID</title>
</head>

<body>
    <x-header-landing-section />
    <main>
        <form>
            <h1>Contate-nos</h1>
            <div class="form-input">
                @csrf
                <label for="nomeCompleto">Nome Completo</label><br>
                <input type="text" id="nome" name="nome"><br>

                <label for="email">Email</label><br>
                <input type="email" id="email" name="email"><br>

                <label for="telefone">Telefone</label><br>
                <input type="tel" id="tel" name="tel"><br>

                <label for="mensagem">Mensagem</label><br>
                <textarea name="mensagem" id="mensagem"></textarea><br>

                <button type="submit">Enviar</button>
            </div>
        </form>
    </main>
    <!-- Rodapé -->
    <x-footer-section />
</body>

</html>
