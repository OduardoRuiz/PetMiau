@include('layouts.header')

<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif

    <main class="m-5 ">



        <div class=" row d-flex justify-content-center">

            @foreach ($pets as $pet)
                <!-- Modal do  QR CODE -->
                <div class="modal fade" {{ 'id=exampleModalCenter' . $pet->id . '' }} tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">QRcode</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @php
                                    $url = 'http://127.0.0.1:8000/geral/';
                                    $url1 = 'http://68.183.115.206/geral/';
                                    $petid = $pet->id;
                                    
                                @endphp

                                <script>
                                    var petid = '<?php echo $petid; ?>'
                                    var imgparametro = petid
                                </script>
                                <img src={{ 'http://chart.apis.google.com/chart?cht=qr&chl=' . $url1 . $pet->id . '&chs=150x150' }}
                                    alt=" - QR code" />

                            </div>
                            <div class="modal-footer">
                                <button type="submit" onclick="download(imgparametro)"
                                    class="btn btn-primary">Salvar</button>
                                <a class="btn btn-outline-info" href={{ 'geral/' . $pet->id }} target="_blank">Abrir</a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 quadroPet">

                    <div>
                        <img src="{{ $pet->imagem }}" class="imgpet" alt="imagem pet">
                    </div>
                    <div>
                        @php
                        $hoje = Date('Y/m/d');
                        $nascimento =$pet->data_nascimento;
                        $idade = ((int)$hoje-(int)$nascimento)
                        @endphp
                        <span>nome: {{ $pet->nome }} </span>
                        <p>Peso: {{ $pet->peso }}kg</p>
                        <p>Idade: {{ $idade }}</p>
                    </div>



                    <div>
                        @if (!$endereco)
                            <a href="{{ route('endereco.create') }}" class="btn btn-outline-info botaoPet">Criar
                                endereço</a>
                        @else
                            <button type="button" class="btn btn-outline-info botaoPet" data-toggle="modal"
                                {{ 'data-target=#exampleModalCenter' . $pet->id . '' }}>
                                Gerar QR Code
                            </button>
                        @endif

                    </div>
                    <div>
                        <a href="{{ Route('vacina_pet.index', $pet_id = $pet->id) }}"
                            class="btn btn-outline-info botaoPet">Vacinas</a>
                    </div>
                    <div>
                        <a href="{{ Route('observacao.index', $pet_id = $pet->id) }}"
                            class=" btn btn-outline-info botaoPet">
                            Anotações</a>
                    </div>
                    <div>
                        <a href="{{ Route('pet.edit', $pet->id) }}" class="btn btn-outline-info botaoPet">Editar
                            informações</a>
                    </div>

                    <div>
                        <form method="POST" action="{{ Route('pet.destroy', $id = $pet->id) }}"
                            class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-info botaoPet"
                                onsubmit="return remover()">Apagar Pet</button>
                        </form>
                    </div>

                </div>
            @endforeach


        </div>

        <div class="mt-3">
            {{ $pets->links() }}

        </div>


    </main>
