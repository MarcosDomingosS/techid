<style>
    footer {
        background: linear-gradient(to top, #F2F0EB, #fbb9b3 60%);
        color: #920A0A;
        text-align: center;
        padding: 20px;
        display: flex;
        flex-direction: column;
    }


    footer .links-row{
        display: flex;
        flex-direction: row;
    }

    footer .links-section{
        padding: 20px;
        display: flex;
        flex-direction: row;
    }

    .footer-container{
        width: 300px;
        padding: 10px 30px;
        text-align: left;
    }

.footer-container ul{
    padding-left: 10px;
}

footer p{
    font-weight: bold;
    margin-bottom: 10px;
}

.contact-input{
    text-align: left;
}

.contact-input input{
    background-color: transparent;
    border: 1px solid black;
    box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.25);
    width: 300px;
    height: 30px;
    padding: 10px;
}

.contact-input button{
    padding: 7px;
    color: #F2F0EB;
    background-color: #8a0000;
    border: 0;
    cursor: pointer;
}

.footer-copyright hr{
    margin: 20px 0;
    border: 1px solid #8a0000;
}
</style>

<footer>
    <nav>
        <div class="links-row">
            <section class="links-section">
                <div class="footer-container">
                    <p>PRODUTOS</p>
                    <ul>
                        <li><a href="{{ route('produtos') }}">Nossos produtos</a></li>
                    </ul>
                </div>
                <div class="footer-container">
                    <p>EMPRESAS</p>
                    <ul>
                        <li><a href="{{ route('sobrenos') }}">Sobre Nós</a></li>
                        <li><a href="(politica de privacidade)">Política de Privacidade</a></li>
                        <li><a href="(trabalhe conosco)">Trabalhe Conosco</a></li>
                    </ul>
                </div>
                <div class="footer-container">
            </section>
            <section class="contact-input">
                <a href="{{route('contato')}}">CONTATE-NOS</a>
            </section>
        </div>
        </div>
        <div class="footer-copyright">
            <hr>
            <p>©2025 Todos os direitos reservados.</p>
        </div>
    </nav>
</footer>
