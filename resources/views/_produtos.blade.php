@if(isset($listas))
<div class="row">
    @foreach($listas as $lista)
        <div class="col-3 mb-3">
            <div class="card"><img src="{{asset($lista->foto)}}"class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">{{$lista->nome}} - R$ {{$lista->valor}}</h6>
                    <a href="{{route('adicionar_carrinho',['idProduto' => $lista->id])}}" class="btn btn-sm btn-secondary">Adicionar Item</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endif