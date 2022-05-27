@include('layouts.header')

<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif



    <h1>Lista dos pets forge</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Peso</th>
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
                        <td>{{ $pet->tipo_id }}</td>
                        <td>{{ $pet->user_id }}</td>



                    </tr>
                @endforeach

            </tbody>
        </table>

</body>

</html>
