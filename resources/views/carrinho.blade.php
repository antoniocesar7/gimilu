@extends("layout")
    @section("conteudo")
        <h3>Carrinho</h3>

        @if(isset($cart) && count($cart) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Foto</th>
                        <th>Descrição</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($cart as $p)
                        <tr>
                            <td>
                                <a href="#" class="btn btn-danger btn-sn">
                                    <i class="fa fa-trash"></i> 
                                </a>
                            </td>
                            <td>{{$p->nome}}</td>
                            <td>{{$p->valor}}</td>
                            <td><img src="{{asset($p->foto)}}" height="50"></td>
                            <td>{{$p->descricao}}</td>

                        </tr>

                    @endforeach
                </tbody>

            </table>
            @else
                <p>Nenhum item no carrinho</p>
        @endif
        

    @endsection
    
