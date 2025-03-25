<style>
    header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #F2F0EB;
    padding: 15px 30px;
    /* width: 100%;
    position: fixed; */
}

header img {
    height: 40px;
}


nav a {
    color: #920A0A;
    text-decoration: none;
    margin-left: 20px;
    font-weight: bold;
}

nav a:hover {
    text-decoration: underline;
}
</style>

<div>
    <header>
        <a href="{{route('inicio')}}"><img src="{{asset('img/logo_TechID-semFundo.png')}}" alt="Logo TechID">
        <nav></a>
            <a href="{{route('inicio')}}">Home</a>
            <a href="{{route('sobrenos')}}">Sobre Nós</a>
            <a href="#">Ajuda</a>
        </nav>
    </header>
</div>
