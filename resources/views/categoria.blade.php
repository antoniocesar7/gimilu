@extends("layout")
    @section("conteudo")
    
        <div class="col-2">
            @if(isset($listaCategorias) && count($listaCategorias)>0)
                <div class="list-group">
                    <a href="{{route('categoria')}}" class="list-group-item list-group-item-action">Todas</a>
                    @foreach($listaCategorias as $listaCategoria)
                        <a href="{{route('id_categoria', ['idCategoria' => $listaCategoria])}}" class="list-group-item list-group-item-action 
                            @if($listaCategoria->id == $idCategoria) active @endif">{{$listaCategoria->categoria}}</a>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="col-10">
            @include("_produtos", ['lista' => $listas]) 
        </div>

    @endsection
    
