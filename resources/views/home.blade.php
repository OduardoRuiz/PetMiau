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



        <!-- parte referente ao carousel bootstrap -->
        <div id="pet" class="carousel slide mt-4" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#pet" data-slide-to="0" class="active"></li>
                <li data-target="#pet" data-slide-to="1"></li>
                <li data-target="#pet" data-slide-to="2"></li>

            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active imagemHome">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/petmiauPng.png" alt="">
                </div>
                <div class="carousel-item imagemHome">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/doisgatos.png" alt="">
                </div>
                <div class="carousel-item imagemHome">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/gatonovelo.png" alt="">
                </div>
            </div>
        </div>

    </main>
    @include('layouts.footer')

</body>
</html>
