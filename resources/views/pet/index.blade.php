@include('layouts.header')

<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif

    <h1>Lista de Pet</h1>
    <a href="{{ route('pet.create') }}" class="btn btn-sm btn-primary">Criar pet</a>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Peso</th>
                    <th>Obs</th>
                    <th>Id do Tipo</th>
                    <th>Id do Usuario </th>


                </tr>
            </thead>
            <tbody>
                @foreach ($pets as $pet)
                    @php
                        $hoje = Date('Y/m/d');
                        $nascimento =$pet->data_nascimento;
                        $idade = ((int)$hoje-(int)$nascimento)
                        @endphp
                        
                        <td>{{ $pet->id }}</td>
                        <td><img src="{{ $pet->imagem }}" style="width:35px"></td>
                        <td>{{ $pet->nome }}</td>
                        <td>@php
                            echo $idade ;
                        @endphp</td>
                        <td>{{ $pet->peso }}</td>
                        <td>{{ $pet->obs }}</td>
                        <td>{{ $pet->tipo_id }}</td>
                        <td>{{ $pet->user_id }}</td>


                        <td>

                            <a href="{{ Route('pet.edit', $pet->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form method="POST" action="{{ Route('pet.destroy', $id = $pet->id) }}" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onsubmit="return remover()">Apagar</button>
                            </form>
                            <a href="{{ Route('observacao.create',$pet_id=$pet->id) }}" class="btn btn-sm btn-warning">Observação</a>

                            <a href="{{ Route('observacao.index',$pet_id=$pet->id) }}" class="btn btn-sm btn-warning">ver observação</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

</body>

</html>
