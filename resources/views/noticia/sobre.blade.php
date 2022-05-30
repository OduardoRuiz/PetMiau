@include('layouts.header')

<body class="">
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif
    <h1>Sobre nós</h1>

    <main>

        <div>
            <span> Nossa missão é muito mais que ser simplesmente um negócio pet . Nosso objetivo maior, é encantar os
                tutores e seus filhos de patas com uma experiência emocional positiva…Ajudar “pais e mães” de pets a
                melhorarem a saúde e qualidade de vida de seus peludos.
            </span>

        </div>
        <div class="imgSobre">
            <img class="img-fluid" src="https://storage.googleapis.com/petmiau-imagens/front-end/petmiaulogotransparente1.png" alt="Logo Pet miau">

        </div>


    </main>
    @include('layouts.footer')

</body>

</html>
