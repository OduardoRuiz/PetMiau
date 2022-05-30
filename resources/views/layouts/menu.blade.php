<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<header>
    <!-- <nav class="navbar navbar-expand-md menuAdm ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="" class="logo"></a>
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse"  id="navbarNavAltMarkup">
            <div class="navbar-nav">

              <a class="nav-link menuAdm" href="{{ route('home') }}" >Home</a>

              <a class="nav-link menuAdm" href="{{ route('user.index') }}" >Usuarios</a>

              <a class="nav-link menuAdm" href="{{ route('pet.index') }}">Pets</a>

              <a class="nav-link menuAdm" href="{{ route('tipo.index') }}">Tipos</a>

              <a class="nav-link menuAdm" href="{{ route('vacina.index') }}">Vacinas</a>

              <a class="nav-link menuAdm" href="{{ route('noticia.index') }}">Noticias</a>

              <a class="nav-link menuAdm" href="{{ route('endereco.index') }}">Endereço</a>

              <a class="nav-link menuAdm" href="{{ route('perfil.meuspets') }}" >Meus Pets</a>

              <a class="nav-link menuAdm" href="{{ route('pet.create') }}">Cadastrar Pets</a>

              <a class="nav-link menuAdm" href="{{ route('perfil.usuario') }}">Minha Conta</a>

              <a class="nav-link menuAdm" href="{{ route('noticia.noticias') }}">Noticias e Curiosidades</a>

              <a class="nav-link menuAdm" href="{{ route('noticia.sobre') }}">Sobre</a> -->

    <nav class="navbar navbar-expand-lg navbar-light menuPrincipal">
        <div class="container-fluid">
            <img class="logoimg"
                src="https://storage.googleapis.com/petmiau-imagens/front-end/petmiaulogotransparente1.png"
                alt="Logo PetMiau">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav hoverDoMenu">
                    <li class="nav-item">
                        <a class="nav-link menuAdm" href="{{ route('home') }}">Home</a>
                    </li>


                    @if (Auth::user() != null)

                        @if (Auth::user()->IsAdmin == 1)
                            <li class="nav-item">
                                <a class="nav-link menuAdm" href="{{ route('user.index') }}">Usuarios</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menuAdm" href="{{ route('pet.index') }}">Pets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menuAdm" href="{{ route('tipo.index') }}">Tipos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menuAdm" href="{{ route('vacina.index') }}">Vacinas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menuAdm" href="{{ route('noticia.index') }}">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menuAdm" href="{{ route('endereco.index') }}">Endereço</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link menuAdm" href="{{ route('perfil.meuspets') }}">Meus Pets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menuAdm" href="{{ route('pet.create') }}">Cadastrar Pets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menuAdm" href="{{ route('perfil.usuario') }}">Minha Conta</a>
                            </li>
                        @endif


                    @endif

                    <li class="nav-item">
                        <a class="nav-link menuAdm" href="{{ route('noticia.noticias') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menuAdm" href="{{ route('noticia.sobre') }}">Sobre nós </a>
                    </li>




                    
                        @if (Auth::user() == null)
                            <li class="nav-item">
                                <a class="nav-link menuAdm" href="{{ route('login') }}">Login</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <b class="nav-link d-flex  menuAdm">Olá, {{ Auth::user()->name }}</b>
                            </li>
                        @endif


                        @if (Auth::user() == null)
                            <li class="nav-item" >
                                <a class="nav-link menuAdm" href="{{ route('register') }}">Registrar</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <div class="">

                                    <form  method="POST" action="{{ route('logout') }}">
                                        @csrf


                                        <a :href="route('logout')" class=" btnSair nav-link menuAdm"
                                            style="color:blue" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            {{ __('Sair') }}
                                    </a>
                                    </form>

                                </div>
                            </li>
                    

                </ul>
                @endif

            </div>


        </div>
    </nav>




    </div>
    </div>
    </div>
    </nav>
</header>
