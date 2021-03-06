@include('layouts.header')

<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div class=" text-center d-flex justify-content-center mt-5 alert alert-success" role="alert">
            <div class=" balaoAlert">{{ session()->get('sucesso') }}</div>
        </div>
    @endif

    <div class="m-2">
        <h1 class="ml-1 h4">Anotações: {{ $nomepet }}</h1>

        <button type="button" class="btn btn-primary btn-sm mb-2 ml-2" data-toggle="modal" data-target="#exampleModalCenter">
            Nova anotação
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Escreva uma anotação </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('observacao.store', $id = $pet_id) }}" method="post">
                        @method('PATCH')
                        @csrf

                        <div class="row m-1">
                            <span class="form-label"></span>
                            <textarea required class="form-control" name="texto"></textarea>


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



    <!-- Modal -->






    <div class="row m-2">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Texto</th>
                    <th>Criado em</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($observacoes as $observacao1)
                    <tr>
                        <td>{{ $observacao1->texto }}</td>
                        @php
                            $originalDate = $observacao1->updated_at;
                            $newDate = date('d-m-Y', strtotime($originalDate));
                        @endphp
                        <td>{{ $newDate }}</td>
                        <td>

                            <div class="modal fade" {{ 'id=exampleModalCenter' . $observacao1->id . '' }}
                                tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edite a anotação</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{ route('observacao.update', $observacao1->id) }}"
                                                method="post">
                                                @method('PATCH')
                                                @csrf
                                                <div class="">
                                                    <textarea required type="text" name="texto" class="form-control m-1">{{ $observacao1->texto }}</textarea>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>



                            <form method="POST" action="{{ Route('observacao.destroy', $id = $observacao1->id) }}"
                                class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onsubmit="return remover()">Apagar</button>
                            </form>

                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                                {{ 'data-target=#exampleModalCenter' . $observacao1->id . '' }}>
                                Editar
                            </button>


                        </td>


                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @include('layouts.footer')

</body>

</html>
