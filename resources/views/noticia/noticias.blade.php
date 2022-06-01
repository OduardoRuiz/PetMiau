@include('layouts.header')

<body class="content">
    @include('layouts.menu')

    <h1 class="h5 text-center mt-5">Blog - Noticias e Curiosidades</h1>
    <main class="mainNoticias  row">

        <section class=" mt-5 w-100 section">


            <div id="carouselExampleControls" class="carousel slide align-content-center" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class=" w-100"
                            src="https://storage.googleapis.com/petmiau-imagens/front-end/blogAdotepets1.png"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class=" w-100"
                            src="https://storage.googleapis.com/petmiau-imagens/front-end/blogMundialpets.png"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class=" w-100"
                            src="https://storage.googleapis.com/petmiau-imagens/front-end/curiosidadeBlog.png"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span  class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </section>


        <section class="container text-dark mt-4 mb-5 ">

            <h2 class="h3 mt-4 text-center ">Destaques do PetMiau</h2>

            <div class="row mt-5  mx-1">
                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogBulldog.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2 ">
                        <h2 class="h5 ">Patrulha</h2>
                        <p class="h6 ">Descubra qual é a raça dos cachorros da Patrulha Canina!
                        </p>

                    </div>

                </div>
                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogCatoecachorro.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2 ">
                        <h2 class="h5 ">Cachorro e gato</h2>
                        <p class="h6 ">10 dicas para facilitar a convivência dos seus amados pets
                        </p>

                    </div>

                </div>


                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogFilhote.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2 ">
                        <h2 class="h5 ">Filhotes</h2>
                        <p class="h6 ">Saiba até quando um gato é filhote e reconheça os sinais

                        </p>

                    </div>

                </div>


                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogGatoGrande.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2">
                        <h2 class="h5 ">Obesidade felina</h2>
                        <p class="h6 ">Saiba como evitar e tratar o problema, para que seu gato fique com
                            saúde
                        </p>

                    </div>

                </div>

            </div>


        </section>

        <section class=" container text-dark mt-4 mb-5 mb-sm-3 mt-sm-0  d-flex row ">

            <h2 class="h3 mt-4 mt-sm-4 mb-sm-4 text-center">Últimas do Petmiau</h2>

            <div class="row mt-1  mx-1">
                <div class="text-center col-11 col-md-6 col-lg-6 mb-sm-0 ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogMeninaCachorro.jpg"
                        class="img-fluid imgCardNoticias ">
                </div>
                <div class="mt-2 col mt-sm-0 text-left ">
                    <h2 class="h5 ">Cachorro para criança? Veja por que essa é uma ótima ideia
                    </h2>
                    <p class="h6 ">Este artigo busca ajudar a resolver esta questão. Afinal, será que essa
                        relação pode ser benéfica para crianças e cachorros? É isso que vamos descobrir agora! Continue
                        a leitura e tire suas próprias conclusões.
                    </p>

                </div>


            </div>
            <div class="row mt-1  mx-1">
                <div class="text-center col-11 col-md-6 col-lg-6 ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/BlogGato.jpg"
                        class="img-fluid imgCardNoticias ">
                </div>
                <div class="mt-2 mt-sm-0 col text-left ">
                    <h2 class="h5 ">Como cuidar de gatos filhotes: 7 dicas para uma adaptação tranquila
                    </h2>
                    <p class="h6 ">Seja por uma gravidez inesperada ou por uma adoção, um pet bebê precisa de
                        cuidados especiais, e nós precisamos estar preparados. Se você está se perguntando como cuidar
                        de um gato filhote, está no lugar certo! Continue lendo e aprenda 7 dicas para uma adaptação
                        tranquila.
                    </p>

                </div>


            </div>

            <div class="row mt-1  mx-1">
                <div class="text-center col-11 col-md-6 col-lg-6  ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/BlogPugViagem.jpg"
                        class="img-fluid imgCardNoticias ">
                </div>
                <div class="mt-2 col mt-sm-0 text-left ">
                    <h2 class="h5 ">10 dicas para viajar de carro com cachorros com segurança</h2>
                    <p class="h6 ">Você quer planejar uma viagem de carro e levar junto seu cachorrinho nesse
                        passeio? Saiba que é importante estar atenta a uma série de dicas para viajar de carro com
                        cachorros com segurança tanto para o motorista quanto para seu melhor amigo.
                    </p>

                </div>


            </div>



        </section>
        <section class="">
            <div class="">
                <div class="text-center col ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogbanner.png"
                        class="img-fluid">
                </div>

            </div>



        </section>
        @include('layouts.footer')

    </main>
    


</body>

</html>
