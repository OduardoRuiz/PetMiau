@include('layouts.header')
<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        
    <div>
        {{session()->get('sucesso')}}

    </div>
 @endif
    <h1>Noticias</h1>

    <h1>pagina para o usuario</h1>
    <main>
        
            @foreach ($noticias as $noticia)
            
               <div class="text-center">
                   
                    <pre>{{ $noticia->noticia }}</pre>

                </div>

        @endforeach
            
        
    </main>
    @include('layouts.footer')

</body>

</html>
