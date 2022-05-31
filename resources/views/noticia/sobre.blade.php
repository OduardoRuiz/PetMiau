@include('layouts.header')

<body class="text-center">
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif

    <main>
        <h1 class="texto h4">Sobre nós</h1>

        <div class="texto">
            <img src="https://storage.googleapis.com/petmiau-imagens/front-end/petmiaulogotransparente1.png"
                alt="Você não tem pets cadastrados imagem">
            <div class="textoSobre m-auto m-lg-auto m-sm-4">
                <hr>
                <p> O Pet Miau tem a missão facilitar a organização do tutor com as informações de seus pets, oferecendo
                    uma plataforma onde se pode cadastrar informações do seu pet, além de se informar sobre as últimas
                    novidades do mundo animal.
                </p>
                <h6>QrCode</h6>
                <p>Ao realizar seu cadastro e de seu pet em nossa plataforma, é possivel gerar um QrCode, de forma
                    individual, para cada um de seus pets.</p>
                <p>Com isto, será possivel que qualquer pessoa que acesse o qrCode veja as informações que lá estão
                    cadastradas,
                    então assim caso seu pet fuja ou se perca, poderão te achar facilmente e ajudar seu bichinho a sair
                    das rua</p>
                <h6>Coleiras</h6>
                <p>É possivel adquirir em nossa Loja, Coleiras/Pulseiras personalizadas com o QrCode do seu pet, assim
                    seu bichinho irá ficar elegante e protegido
                    com as informações dele cadastradas em nosso sistema de dados.</p>
                <h6>Caderneta de vacinação </h6>
                <p>Sabe aquele momento em que você esta com pressa para sair para a consulta do seu bichinho e não acha
                    a carteirinha de vacinação do seu pet ?
                    Foi pensando nesses perrengues, que criamos o recurso de vacinação virtual, para nosso amados pets.
                </p>
                <p>Lá é possivel deixar todo o historico de vacinação, junto com a data, e acessar de qualquer lugar que
                    você quiser.
                </p>


            </div>

            <section class="container text-dark mt-4 mb-5 ">

                <h6 class="">Conheça nossos clientes</h6>

                <div class="row mt-5 ">
                    <div class="col-11 col-md-6 col-lg-2 mt-1 ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/Duda.jpeg"
                            class="img-fluid imgRodapeSobre  ">
                    </div>
                    <div class="col-11 col-md-6 col-lg-2 mt-1 ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/carlosSol.jpeg"
                            class="img-fluid imgRodapeSobre ">
                    </div>
                    <div class="col-11 col-md-6 col-lg-2 mt-1  ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/bruc.jpeg"
                            class="img-fluid imgRodapeSobre  ">

                    </div>

                    <div class="col-11 col-md-6 col-lg-2 mt-1 ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/luk.jpeg"
                            class="img-fluid imgRodapeSobre ">

                    </div>

                    <div class="col-11 col-md-6 col-lg-2 mt-1 ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/lukeCoberta.jpeg"
                            class="img-fluid imgRodapeSobre  ">
                    </div>
                    <div class="col-11 col-md-6 col-lg-2 mt-1 ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/lukeCoberta.jpeg"
                            class="img-fluid imgRodapeSobre  ">
                    </div>
                    <!--Numero minimo de imagens até aqui-->

                    <div class="col-11 col-md-6 col-lg-2 mt-1  ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/Duda.jpeg"
                            class="img-fluid imgRodapeSobre  ">
                    </div>
                    <div class="col-11 col-md-6 col-lg-2 mt-1 ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/carlosSol.jpeg"
                            class="img-fluid imgRodapeSobre ">
                    </div>
                    <div class="col-11 col-md-6 col-lg-2 mt-1  ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/bruc.jpeg"
                            class="img-fluid imgRodapeSobre  ">

                    </div>

                    <div class="col-11 col-md-6 col-lg-2 mt-1 ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/luk.jpeg"
                            class="img-fluid imgRodapeSobre ">

                    </div>

                    <div class="col-11 col-md-6 col-lg-2 mt-1 ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/lukeCoberta.jpeg"
                            class="img-fluid imgRodapeSobre  ">
                    </div>
                    <div class="col-11 col-md-6 col-lg-2 mt-1 ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/clientes/lukeCoberta.jpeg"
                            class="img-fluid imgRodapeSobre  ">
                    </div>


                </div>


            </section>

            <hr>





        </div>

    </main>
    @include('layouts.footer')

</body>

</html>
