@include('layouts.header')

<body>
    @include('layouts.menu')
    <main>


        <!-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="https://storage.googleapis.com/petmiau-imagens/front-end/petmiauPng.png" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="10000">
              <img src="https://storage.googleapis.com/petmiau-imagens/front-end/doisgatos.png" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://storage.googleapis.com/petmiau-imagens/front-end/gatonovelo.png" class="d-block w-50" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>-->


        <div class="mainHome mt-4 row">

            <section class="">
                <div id="carouselExampleIndicators" class="carousel slide align-content-center" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100 img-fluid"
                                src="https://storage.googleapis.com/petmiau-imagens/front-end/gifbanner.gif"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item ">
                            <img class="w-100  img-fluid"
                                src="https://storage.googleapis.com/petmiau-imagens/front-end/perfillink.png"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100  img-fluid"
                                src="https://storage.googleapis.com/petmiau-imagens/front-end/bloglink.png"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="w-100  img-fluid"
                              src="https://storage.googleapis.com/petmiau-imagens/front-end/cadastrar%20pet%20link.png"
                              alt="Second slide">
                      </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>

            <section class="container text-dark mt-4 mb-5 ">

                <h2 class="h3 mt-4 text-center ">Conheça nossos produtos</h2>

                <div class="row mt-5  mx-1">
                    <div class="col-11 col-md-6 col-lg-3 text-center ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/gatocoleira.png"
                            class="img-fluid imgCardNoticias ">
                        <div class="mt-2 ">
                            <h2 class="h5 ">Coleiras</h2>
                            <p class="h6 ">Conheça nossas coleiras com QrCode Personalizado com as informações do seu pet
                            </p>

                        </div>

                    </div>
                    <div class="col-11 col-md-6 col-lg-3 text-center ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/dogcoleira.png"
                            class="img-fluid imgCardNoticias ">
                        <div class="mt-2 ">
                            <h2 class="h5 ">Encontre os facilmente</h2>
                            <p class="h6 ">Em caso seu pet fuja ou se perca, qualquer pessoa pode acessar as informações facilmente
                            </p>

                        </div>

                    </div>


                    <div class="col-11 col-md-6 col-lg-3 text-center ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/gatopreto.png"
                            class="img-fluid imgCardNoticias ">
                        <div class="mt-2 ">
                            <h2 class="h5 ">Informações</h2>
                            <p class="h6 ">Ao cadastrar suas informações na sessão "meu perfil", é automaticamente carregada no QrCode de seus pets
                            </p>

                        </div>

                    </div>


                    <div class="col-11 col-md-6 col-lg-3 text-center ">
                        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/cachorropraia.png"
                            class="img-fluid imgCardNoticias ">
                        <div class="mt-2">
                            <h2 class="h5 ">Carteirinha de vacina</h2>
                            <p class="h6 ">Mantenha as informações de vacinação do seu pet sempre atualizada a seguras, sem risco de perca
                            </p>

                        </div>

                    </div>

                </div>
        </div>

    </main>



    @include('layouts.footer')

</body>

</html>
