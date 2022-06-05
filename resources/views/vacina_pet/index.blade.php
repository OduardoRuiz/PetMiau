@include('layouts.header')

<body>
    @include('layouts.menu')

    <div class="m-2">
        <h1 class="ml-1 h4">Carteirinha De Vacinação: {{ $nomepet }} </h1>
        <div>
            <button type="button" class="btn btn-primary btn-sm mb-2 ml-2" data-toggle="modal"
                data-target="#exampleModalCenter2">
                Adicionar Vacina
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLongTitle">Adicione uma vacina para seu pet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('vacina_pet.criar', $id) }}" method="post">
                        @csrf

                        <div class="row ml-1 mr-1">
                            <span class="form-label">Nome da vacina</span>
                            <select class="form-select" name="vacina_id" required>
                                @foreach ($nomes as $nome)
                                    <option value="none" selected disabled hidden>Escolha uma vacina</option>
                                    <option value="{{ $nome->id }}">{{ $nome->nome }}</option>
                                @endforeach
                            </select>

                            <span class="form-label mt-2">Data da aplicação</span>
                            @php
                                $hoje = Date('Y-m-d');
                            @endphp
                            <input class="form-control" type="date" name="data" id="" max={{ $hoje }}>

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



    <div class="row m-2">
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

                        <td>
                            @foreach ($nomes as $nome)
                                @if ($nome->id == $vacina->vacina_id)
                                    {{ $nome->nome }}
                                @endif
                            @endforeach
                        </td>


                        @php
                            $originalDate = $vacina->data;
                            $newDate = date('d-m-Y', strtotime($originalDate));
                        @endphp
                        <td>{{ $newDate }}</td>



                        <td>
                            <form method="POST" action="{{ Route('apagar', $id = $vacina->updated_at) }}"
                                class="d-inline">
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
    </div>
    @include('layouts.footer')

</body>

</html>
