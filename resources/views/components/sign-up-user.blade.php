<div>
    <dialog id="signin">
        <form action="">
            @csrf
            <h1 class="title-font">Login</h1>
            <button>
                <img src="{{asset('img/icon-ca.png')}}">
                <a href="./frmCA.html">Corpo Acadêmico </a>
            </button>
            <br>
            <button>
                <img src="{{asset('img/icon-responsáveis.png')}}">
                <a href="./frmResponsavel.html">Responsáveis</a>
            </button>
            <br>
            <p>Ainda não tem um login? <a href="./Cadastro.html">Cadastre-se</a></p>
        </form>
    </dialog>
    <dialog id="signup">
        <form action="">
            @csrf
            <h1 class="title-font">Cadastre-se</h1>
            <div class="form-input">
                <label for="nomeCompleto">Nome Completo</label><br>
                <input type="text" id="nome" name="nome"><br>

                <label for="email">Email</label><br>
                <input type="email" id="email" name="email"><br>

                <label for="senha">Senha</label><br>
                <input type="passwword" id="senha" name="senha"><br>

                <label for="cSenha">Confirmação de senha</label><br>
                <input type="password" id="cSenha" name="cSenha"><br>

                <label for="telefone">Telefone</label><br>
                <input type="tel" id="tel" name="tel"><br>

                <label for="mensagem">Mensagem</label><br>
                <input type="text" id="mensagem" name="mensagem"><br>
            </div>
        </form>
    </dialog>
    <button onclick="(signin)"></button>
    <button onclick="(signup)"></button>
</div>
