@include('layouts.header')

<script>
    window.onload = function() {
        var element = document.getElementById("upload");
        element.addEventListener("change", function() {
            var size = element.files[0].size;
            console.log(size);
            if (size <= 275910) { //1MB         
            } else {
                alert('Imagem muito grande por gentileza escolher outra menor '); //Acima do limite
                element.value = ""; //Limpa o campo          
            }
            event.preventDefault();
        });
    };
</script>

<body>
    @include('layouts.menu')

    <body>



        <h1 class="cadastrarUser h4 mt-2">Edite seu perfil</h1>

        <form action="{{ route('user.update', $user->id, $id = $user->id) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group mt-4 campoDigitar">
                <label for="" class="form-label ml-2">Nome</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="form-group mt-4 campoDigitar">
                <label class="form-label ml-2" for="">Sua foto</label>
                <input type="file" class="form-control" id="upload" accept="image/*" name="imagem">

            </div>

            <button type="submit" class="botaoCadastrar mt-4 btn-lg btn-block ">salvar</button>
        </form>
        @include('layouts.footer')

    </body>

    </html>
