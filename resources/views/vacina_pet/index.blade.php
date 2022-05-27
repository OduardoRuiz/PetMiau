@include('layouts.header')

<body>
    @include('layouts.menu')



    <h1 class="ml-1">Vacinas do pet </h1>

    <button type="button" class="btn btn-primary mb-2 ml-1" data-toggle="modal" data-target="#exampleModalCenter2">
        Adicionar Vacina
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Adcione uma vacina</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('vacina_pet.criar', $id) }}" method="post">
                        @csrf

                        <div class="row">
                            <span class="form-label">Nome da vacina</span>
                            <select class="form-select" name="vacina_id" required>
                                @foreach($nomes as $nome)
                                <option value="{{$nome->id}}">{{$nome->nome}}</option>
                                @endforeach
                            </select>

                            <span>Data da aplicação</span>
                            <input type="date" name="data" id="">

                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="row ml-1">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Vacina</th>
                    <th>Data</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($vacinas as $vacina)
                    <tr>

                         <td>@foreach ($nomes as $nome)
                            @if ($nome->id==$vacina->vacina_id)
                              {{ $nome->nome }}
                            @endif
                        @endforeach
                            </td>


                        <td>{{ $vacina->data }}</td>



                        <td>
                            <form method="POST" action="{{ Route('apagar', $id = $vacina->updated_at) }}" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onsubmit="return remover()">Apagar</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

</body>

</html>
