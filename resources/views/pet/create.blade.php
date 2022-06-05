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


    <h1 class="cadastrarPet mt-2">Cadastre seu pet</h1>
    <p class="completePet">Complete os campos a seguir</p>

    <form action="{{ Route('pet.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group campoDigitar">
            <span class="form-label ml-2 ">Nome </span>
            <input type="text" name="nome" class="form-control  " required placeholder="Digite o nome do seu Pet">

        </div>


        <div class="form-group mt-4 campoDigitar">

            @php
                $hoje = Date('Y-m-d');
            @endphp

            <span class="form-label ml-2">Data de nascimento do seu pet</span>
            <input type="date" name="data_nascimento" class="form-control datepicker" required max={{ $hoje }}>
        </div>


        <div class="form-group mt-4 campoDigitar">
            <span class="form-label ml-2">Peso</span>
            <input type="number" min="0" max="10000" name="peso" class="form-control" required
                placeholder="Digite o peso do seu Pet">
        </div>


        <div class="form-group mt-4 campoDigitar">
            <span class="form-label ml-2">Seu pet é um:</span>
            <select class="form-select form-control" name="tipo_id" required>
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-4 campoDigitar">
            <span class="form-label ml-2">Adicione uma foto do seu pet</span>
            <input type="file" id="upload" class="form-control" name="imagem" accept="image/*">
        </div>

        <button type="submit" class="botaoCadastrar mt-4 btn-lg btn-block ">Cadastrar Pet</button>
    </form>
    @include('layouts.footer')

</body>

</html>
