@extends("layout")
    @section("conteudo")
    
        
        <h1>Cadastrar</h1>
        @if(isset($listaCategorias) && count($listaCategorias)>0)
            <ul>
                @foreach($listaCategorias as $listaCategoria)
                    <li>{{$listaCategoria->categoria}}</li>
                @endforeach
            </ul>
        @endif
        @if(isset($listaProdutos) && count($listaProdutos)>0)
            <ul>
                @foreach($listaProdutos as $listaProduto)
                    <li>{{$listaProduto->nome}}</li>
                @endforeach
            </ul>
        @endif

    @endsection
    
    
