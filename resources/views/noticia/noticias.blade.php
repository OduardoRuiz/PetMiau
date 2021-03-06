@include('layouts.header')

<body class="content">
    @include('layouts.menu')

    <h1 class="h4 text-center mt-2">Blog - Noticias e Curiosidades</h1>
    <main class="mainNoticias  row">

        <section class=" mt-2 w-100">


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

            <h2 class="h4 mt-4 text-center ">Destaques do PetMiau</h2>

            <div class="row mt-5  mx-1">
                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogBulldog.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2 ">
                        <h2 class="h5 ">Patrulha</h2>
                        <p class="h6 ">Descubra qual ?? a ra??a dos cachorros da Patrulha Canina!
                        </p>

                    </div>

                </div>
                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogCatoecachorro.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2 ">
                        <h2 class="h5 ">Cachorro e gato</h2>
                        <p class="h6 ">10 dicas para facilitar a conviv??ncia dos seus amados pets
                        </p>

                    </div>

                </div>


                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogFilhote.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2 ">
                        <h2 class="h5 ">Filhotes</h2>
                        <p class="h6 ">Saiba at?? quando um gato ?? filhote e reconhe??a os sinais

                        </p>

                    </div>

                </div>


                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogGatoGrande.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2">
                        <h2 class="h5 ">Obesidade felina</h2>
                        <p class="h6 ">Saiba como evitar e tratar o problema, para que seu gato fique com
                            sa??de
                        </p>

                    </div>

                </div>

            </div>


        </section>

        <section class=" container text-dark mt-4 mb-5 mb-sm-3 mt-sm-0  d-flex row ">

            <h2 class="h3 mt-4 mt-sm-4 mb-sm-4 text-center">??ltimas do Petmiau</h2>

            <div class="row mt-1  mx-1">
                <div class="text-center col-11 col-md-6 col-lg-6 mb-sm-0 ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/blogMeninaCachorro.jpg"
                        class="img-fluid imgCardNoticias ">
                </div>
                <div class="mt-2 col mt-sm-0 text-left ">
                    <h2 class="h5 ">Cachorro para crian??a? Veja por que essa ?? uma ??tima ideia
                    </h2>
                    <p class="h6 ">Este artigo busca ajudar a resolver esta quest??o. Afinal, ser?? que essa
                        rela????o pode ser ben??fica para crian??as e cachorros? ?? isso que vamos descobrir agora! Continue
                        a leitura e tire suas pr??prias conclus??es.
                    </p>

                </div>


            </div>
            <div class="row mt-1  mx-1">
                <div class="text-center col-11 col-md-6 col-lg-6 ">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/BlogGato.jpg"
                        class="img-fluid imgCardNoticias ">
                </div>
                <div class="mt-2 mt-sm-0 col text-left ">
                    <h2 class="h5 ">Como cuidar de gatos filhotes: 7 dicas para uma adapta????o tranquila
                    </h2>
                    <p class="h6 ">Seja por uma gravidez inesperada ou por uma ado????o, um pet beb?? precisa de
                        cuidados especiais, e n??s precisamos estar preparados. Se voc?? est?? se perguntando como cuidar
                        de um gato filhote, est?? no lugar certo! Continue lendo e aprenda 7 dicas para uma adapta????o
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
                    <h2 class="h5 ">10 dicas para viajar de carro com cachorros com seguran??a</h2>
                    <p class="h6 ">Voc?? quer planejar uma viagem de carro e levar junto seu cachorrinho nesse
                        passeio? Saiba que ?? importante estar atenta a uma s??rie de dicas para viajar de carro com
                        cachorros com seguran??a tanto para o motorista quanto para seu melhor amigo.
                    </p>

                </div>


            </div>



        </section>
        <section class="mb-3">
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
