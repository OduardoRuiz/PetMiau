@include('layouts.header')

<body class="text-center">
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif
    <h1 class="texto">Sobre nós</h1>

    <main>

        <div class="texto">
            <p> Nossa missão é muito mais que ser simplesmente um negócio pet . Nosso objetivo maior, é encantar os
                tutores e seus filhos de patas com uma experiência emocional positiva…
            </p>
            <p>
                
            </p>

        </div>
        <div class="imgSobre">
            <img class="img-fluid" src="https://storage.googleapis.com/petmiau-imagens/front-end/petmiaulogotransparente1.png" alt="Logo Pet miau">

        </div>


    </main>
    @include('layouts.footer')

</body>

</html>
