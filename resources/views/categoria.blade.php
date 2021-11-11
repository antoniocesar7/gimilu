@extends("layout")
    @section("conteudo")
    
        <h1>Categoria</h1>
        @if(isset($listaCategorias) && count($listaCategorias)>0)
            <ul>
                <a href="{{route('categoria')}}">Todas</a>
                @foreach($listaCategorias as $listaCategoria)
                    <li><a href="{{route('id_categoria', ['idCategoria' => $listaCategoria])}}">{{$listaCategoria->categoria}}</a></li>
                @endforeach
            </ul>
        @endif
        @include("_produtos", ['lista' => $listas]) 

    @endsection
    
