@include('layouts.header')

<body class="content">
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif
    <h1 class="h5 text-center mt-5">Blog - Noticias e Curiosidades</h1>
    <main class="mainNoticias  row">

        <section class=" mt-5 w-100 section">


            <div id="carouselExampleControls" class="carousel slide align-content-center" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class=" w-100"
                            src="https://i.pinimg.com/originals/19/9d/da/199dda88fbca22eae7b3c5f3c022e16b.jpg"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class=" w-100"
                            src="https://i.pinimg.com/originals/19/9d/da/199dda88fbca22eae7b3c5f3c022e16b.jpg"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class=" w-100"
                            src="https://i.pinimg.com/originals/19/9d/da/199dda88fbca22eae7b3c5f3c022e16b.jpg"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </section>


        <section class="container text-dark mt-4 mb-5 ">

            <h2 class="h3 mt-4 text-center ">Destaques do PetMiau</h2>

            <div class="row mt-5  mx-1">
                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://cdn.pixabay.com/photo/2019/04/06/15/58/cat-4107662_960_720.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2 ">
                        <h2 class="h5 ">Gatos</h2>
                        <p class="h6 ">Nomes para gatos: opções ideais para chamar o seu bichano
                        </p>

                    </div>

                </div>
                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://cdn.pixabay.com/photo/2019/04/06/15/58/cat-4107662_960_720.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2 ">
                        <h2 class="h5 ">Gatos</h2>
                        <p class="h6 ">Nomes para gatos: opções ideais para chamar o seu bichano
                        </p>

                    </div>

                </div>


                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://cdn.pixabay.com/photo/2019/04/06/15/58/cat-4107662_960_720.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2 ">
                        <h2 class="h5 ">Gatos</h2>
                        <p class="h6 ">Nomes para gatos: opções ideais para chamar o seu bichano
                        </p>

                    </div>

                </div>


                <div class="col-11 col-md-6 col-lg-3 text-center ">
                    <img src="https://cdn.pixabay.com/photo/2019/04/06/15/58/cat-4107662_960_720.jpg"
                        class="img-fluid imgCardNoticias ">
                    <div class="mt-2">
                        <h2 class="h5 ">Gatos</h2>
                        <p class="h6 ">Nomes para gatos: opções ideais para chamar o seu bichano
                        </p>

                    </div>

                </div>

            </div>


        </section>

        <section class=" container text-dark mt-4 mb-5 d-flex row ">

            <h2 class="h3 mt-4 text-center  ">Ultimas do Petmiau</h2>

            <div class="row mt-5  mx-1">
                <div class="text-center col ">
                    <img src="https://cdn.pixabay.com/photo/2019/04/06/15/58/cat-4107662_960_720.jpg"
                        class="img-fluid imgCardNoticias ">
                </div>
                <div class="mt-2 col text-left ">
                    <h2 class="h5 ">Titulo</h2>
                    <p class="h6 ">Nome materia
                    </p>

                </div>
               

            </div>
            <div class="row mt-5  mx-1">
                <div class="text-center col ">
                    <img src="https://cdn.pixabay.com/photo/2019/04/06/15/58/cat-4107662_960_720.jpg"
                        class="img-fluid imgCardNoticias ">
                </div>
                <div class="mt-2 col text-left ">
                    <h2 class="h5 ">Titulo</h2>
                    <p class="h6 ">Nome materia
                    </p>

                </div>
               

            </div>

            <div class="row mt-5  mx-1">
                <div class="text-center col ">
                    <img src="https://cdn.pixabay.com/photo/2019/04/06/15/58/cat-4107662_960_720.jpg"
                        class="img-fluid imgCardNoticias ">
                </div>
                <div class="mt-2 col text-left ">
                    <h2 class="h5 ">Titulo</h2>
                    <p class="h6 ">Nome materia
                    </p>

                </div>
               

            </div>



        </section>
        <section class="">
            <div class="">
                <div class="text-center col ">
                    <img src="http://optclean.com.br/wp-content/uploads/2016/11/capa-para-facebook64.jpg"
                        class="">
                </div>  

            </div>
           


        </section>
        http://optclean.com.br/wp-content/uploads/2016/11/capa-para-facebook64.jpg

        <!---->


        <!---->

    </main>
    @include('layouts.footer')

</body>

</html>
