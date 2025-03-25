@section
<form>
    <h1 class="title-font">{{$titleForm}}</h1>
    <div class="form-input">
        <label for="nome">Nome Completo</label><br>
        <input type="text" id="nome" name="nome"><br>
        
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="senha">Senha</label><br>
        <input type="passwword" id="senha" name="senha"><br>

        <label for="cSenha">Confirmação de senha</label><br>
        <input type="password" id="cSenha" name="cSenha"><br>

        <label for="tel">Telefone</label><br>
        <input type="tel" id="tel" name="tel"><br>

        <label for="mensagem">Mensagem</label><br>
        <input type="text" id="mensagem" name="mensagem"><br>
    </div>
    <button>Enviar</button>
</form>