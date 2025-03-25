<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <title>Home | TechID</title>
</head>
<body>
    <x-header-landing-section/>
    <main>

        <section class="section-home">
            <div class="text-container">
                <h1 class="title-font">Simplifique o presente, transforme o futuro!</h1>
                <h3>O TechID visa automatizar o âmbito escolar através da tecnologia RFID.</h3>
                <div class="button-container">
                    <button><a href="{{route('login')}}">Entrar</a></button>
                </div>
            </div>
            <div class="image-container">
                <img src="{{ asset('img/img-alunos-inicio.png') }}" alt="Imagem ilustrativa">
            </div>
        </section>

        <div class="shadow-path">
            <section class="section-about">
                <h1 class="title-font">Quem somos nós?</h1>
                <p>
                    Atualmente muitas escolas adotam sábados letivos para compensar os dias ou períodos de aulas
                    perdidos e com isso enfrentam problemas no processo de controle de presença de alunos, pois devido
                    ao grande número de alunos o método tradicional de assinatura manual na lista de presença se mostra
                    ineficaz e demorado resultando aumento significativo na carga de trabalho por parte dos funcionários
                    da secretaria e grande possibilidade de erros. Por razão disso, o TechID visa automatizar o âmbito
                    escolar através de Tecnologia RFID oferecendo mais segurança, praticidade, eficiência e modernidade,
                    elevando assim a qualidade de ensino oferecido aos alunos.
                </p>
            </section>

            <section class="imgs-divide">
                <img src="{{asset('img/img-computer.png')}}" alt="">
            </section>

            {{--aqui vai um componente--}}
            <section class="section-team">
                <h1 class="title-font">Nossa Equipe</h1>
                <img src="{{asset('img/img-equipe.png')}}" alt="">
                {{--Aqui vem outro componente, um carrousel (TechIDDevTeamSlider--}}
            </section>

            <section class="imgs-divide caderno-direita">
                <img src="{{asset('img/img-noteboook.png')}}" alt="">
            </section>

            {{--adicionar routing aqui--}}
            <section class="section-links">
                <h1 class="title-font">Acesse também</h1>
                <h5>PRODUTOS</h5>
                <a href="{{route('produtos')}}">Nossos produtos</a>
                <h5>EMPRESA</h5>
                <a href="{{route('sobrenos')}}">Sobre Nós</a> <br>
                <a href="#{{--route(any)--}}">Política de Privacidade</a><br>
                <a href="#{{--route(any)--}}">Trabalhe Conosco</a>
            </section>
        </div>
    </main>
    <x-footer-section/>
<link rel="stylesheet" href="{{asset('js/index.js')}}">
</body>
</html>
