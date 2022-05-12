@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>criar pet</h1>

    <form action="{{Route('pet.store')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="row">
        <span class="form-label">Nome</span>
        <input type="text" name="nome" class="form-control">
        </div>

        
        <div class="row">
            <span class="form-label">idade</span>
            <input type="date"  name="data_nascimento" class="form-control" required>
        </div>
        
        
        <div class="row">
            <span class="form-label">Peso</span>
            <input type="number" min="0" max="10000" name="peso"  class="form-control" required>
        </div>

        
        <div class="row">
            <span class="form-label">Tipo</span>
            <select class="form-select" name="tipo_id" required>
                @foreach($tipos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <span class="form-label">Vacina</span>
            <select class="form-select" name="vacinas[]"  multiple>
                @foreach($vacinas as $vacina)
                <option value="{{$vacina->id}}">{{$vacina->nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="row">
            <span class="form-label">Imagem</span>
            <input type="file" class="form-control" name="imagem">
        </div>

        <button type="submit">salvar</button>
    </form>

</body>

</html>
