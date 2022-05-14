@include('layouts.header')
<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        
    <div>
        {{session()->get('sucesso')}}

    </div>
 @endif
    <h1>Sobre</h1>

    <h1>pagina para o todos</h1>
    <main>
        
            <div>sobre nos</div>
        
    </main>
</body>

</html>
