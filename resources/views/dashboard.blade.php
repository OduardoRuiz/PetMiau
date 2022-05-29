<style>
    .bloqueioTexto {
        font-size: 3rem;
        text-align: center;
    }

    .bloqueioLink {
        font-size: 2rem;
        text-align: center;
        margin-bottom: 3rem;
    }

    .bloqueioLink {
        display: block;
        margin-left: auto;
        margin-right: auto;

    }

    .bloqueioImg {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 15rem;
        height: 15rem;

    }

    body {
        background-color: #f2fbff;
    }

</style>

<body>
    <p class="bloqueioTexto">Sem permissão para acessar a página</p>

    <!--
    <form method="POST" action="{{ route('logout') }}">
        @csrf
    
    
        <x-responsive-nav-link :href="route('logout')" class="text-white navbar-nav d-flex bloqueioLink" style="text-decoration: underline;" onclick="event.preventDefault();
                                            this.closest('form').submit();">
            {{ __('Click aqui para voltar') }}
        </x-responsive-nav-link>
    </form>
    -->
    <a class="text-white navbar-nav d-flex bloqueioLink" href="{{ route('home') }}">Voltar para tela inicial </a>

    <img class="bloqueioImg"
        src="https://storage.googleapis.com/petmiau-imagens/front-end/petmiaulogotransparente1.png">
</body>
