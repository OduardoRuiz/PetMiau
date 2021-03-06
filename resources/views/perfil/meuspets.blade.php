@include('layouts.header')

<body>
    @include('layouts.menu')




    <main class="m-5 ">

        @if (session()->has('sucesso'))
        <div class=" text-center d-flex justify-content-center mt-5 alert alert-success" role="alert">
            <div class=" balaoAlert">{{ session()->get('sucesso') }}</div>
        </div>
        @endif

        <div class=" row d-flex justify-content-center">

            @if ($petCount == 0)

                <div class="semPet">
                    <img src="https://storage.googleapis.com/petmiau-imagens/front-end/petmiaulogotransparente1.png"
                        alt="Você não tem pets cadastrados imagem">
                    <h5>Você não tem pets cadastrados, cadastre um agora</h5>

                    <a class="btn btn-outline-info botaoPet" href="{{ route('pet.create') }}">Cadastrar Pets</a>
                </div>
            @else
                @foreach ($pets as $pet)
                    <!-- Modal do  QR CODE -->
                    <div class="modal fade" {{ 'id=exampleModalCenter' . $pet->id . '' }} tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">QRcode</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
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
                                    <button type="submit" onclick="download('<?php echo $petid; ?>')"
                                        class="btn btn-primary">Salvar</button>
                                    <a class="btn btn-outline-info" href={{ 'geral/' . $pet->id }}
                                        target="_blank">Abrir</a>
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cancelar</button>


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
                                $nascimento = $pet->data_nascimento;
                                $idade = (int) $hoje - (int) $nascimento;
                            @endphp
                            <p class="petIndex"><span class="fw-bold">Nome:</span>  {{ $pet->nome }} </p>
                            <p class="petIndex"><span class="fw-bold">Peso:</span>  {{ $pet->peso }}kg</p>
                            <p class="petIndex"><span class="fw-bold">Idade: </span>  {{ $idade }}</p>
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
                <div class="mt-4 d-flex justify-content-center  ">
                    {{ $pets->links() }}

                </div>
            @endif


        </div>




    </main>

    @include('layouts.footer')
