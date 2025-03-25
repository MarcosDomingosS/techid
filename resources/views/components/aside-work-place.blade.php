<aside>
    <a href="/workplace"><img src="{{asset('img/logo_TechID-semFundo.png')}}" alt="Logo TechID"></a>
    <ul>

        <x-workplace-buttons img="{{asset('img/icon-local.png')}}" nome="Localização" url="" classe=""/>
        @if($request == 'Sabado')
        <x-workplace-buttons img="{{asset('img/icon-sl.png')}}" nome="Sábado Letivo" url="{{route('aluno.index.sabado')}}" classe="selected"/>
        @else
        <x-workplace-buttons img="{{asset('img/icon-sl.png')}}" nome="Sábado Letivo" url="{{route('aluno.index.sabado')}}" classe=""/>
        @endif
        @if($request == 'Visita')
        <x-workplace-buttons img="{{asset('img/icon-vt.png')}}" nome="Vísita Técnica" url="{{route('aluno.index.visita')}}" classe="selected"/>
        @else
        <x-workplace-buttons img="{{asset('img/icon-vt.png')}}" nome="Vísita Técnica" url="{{route('aluno.index.visita')}}" classe=""/>
        @endif
        @if($request == 'Biblio')
        <x-workplace-buttons img="{{ asset('img/icon-biblio.png') }}" nome="Entradas da Biblioteca" url="{{route('aluno.index.biblioteca')}}" classe="selected"/>
        @else
        <x-workplace-buttons img="{{ asset('img/icon-biblio.png') }}" nome="Entradas da Biblioteca" url="{{route('aluno.index.biblioteca')}}" classe=""/>
        @endif
        @if($request == 'Saidas')
        <x-workplace-buttons img="{{ asset('img/icon-sa.png') }}" nome="Saídas Antecipadas" url="{{route('aluno.index.saida')}}" classe="selected"/>
        @else
        <x-workplace-buttons img="{{ asset('img/icon-sa.png') }}" nome="Saídas Antecipadas" url="{{route('aluno.index.saida')}}" classe=""/>
        @endif
        @if($request == 'Evento')
        <x-workplace-buttons img="{{ asset('img/icon-ae.png') }}" nome="Eventos de Sábado Letivo" url="{{ route('acesso.eventos') }}" classe="selected"/>
        @else
        <x-workplace-buttons img="{{ asset('img/icon-ae.png') }}" nome="Eventos de Sábado Letivo" url="{{ route('acesso.eventos') }}" classe=""/>
        @endif
        @if($request == 'Aluno')
        <x-workplace-buttons img="{{ asset('img/icon-cad-alun.png') }}" nome="Cadastro de Alunos" url="{{route('acesso.cadastro.aluno')}}" classe="selected"/>
        @else
        <x-workplace-buttons img="{{ asset('img/icon-cad-alun.png') }}" nome="Cadastro de Alunos" url="{{route('acesso.cadastro.aluno')}}" classe=""/>
        @endif

        @if($request == 'Funcionario')
        <x-workplace-buttons img="{{ asset('img/icon-cad-func.png') }}" nome="Cadastro de Funcionários" url="{{route('acesso.cadastro.funcionario')}}" classe="selected"/>
        @else
        <x-workplace-buttons img="{{ asset('img/icon-cad-func.png') }}" nome="Cadastro de Funcionários" url="{{route('acesso.cadastro.funcionario')}}" classe=""/>
        @endif

    </ul>
    <section class="functions-sidebar">
        <hr>
        <ul>
            <li>
                <a href="">
                    <img src="{{ asset('img/icon-config.png') }}" alt="">
                    <p>Configurações</p>
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}">
                    <img src="{{ asset('img/icon-sair.png') }}" alt="">
                    <p>Sair</p>
                </a>
            </li>
        </ul>
    </section>
</aside>
