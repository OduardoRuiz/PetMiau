<header>
    <nav class="navbar navbar-expand-md menuAdm ">
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
            
              <a class="nav-link menuAdm" href="{{route('perfil.meuspets')}}" >Meus Pets</a>
           
              <a class="nav-link menuAdm" href="{{route('pet.create')}}">Cadastrar Pets</a>
            
              <a class="nav-link menuAdm" href="{{route('perfil.usuario')}}">Minha Conta</a>
            
              <a class="nav-link menuAdm" href="{{route('vacina.index')}}">Noticias e Curiosidades</a>
    
              <a class="nav-link menuAdm" href="{{route('noticia.index')}}">Sobre</a>
    
            @if (Auth::user()==null)
                
            @else
                <div class="nav-link d-flex  menuAdm">Bem Vindo {{Auth::user()->name  }}</div>
            @endif
          
              
          
              <div class="" >
    
              <form  method="POST" action="{{ route('logout') }}">
                @csrf
    
              
                <x-responsive-nav-link :href="route('logout')" class=" navbar-nav d-flex  " style="text-decoration: underline;" onclick="event.preventDefault();
                                            this.closest('form').submit();" >
                  {{ __('entrar') }}
                </x-responsive-nav-link>
              </form>
          
              </div>
    
    
            </div>
          </div>
        </div>
      </nav>
    </header>

