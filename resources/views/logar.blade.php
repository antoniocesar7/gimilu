@extends("layout")
@section("conteudo")
    <div class="col-12">
        <h2 class="mb-3">Logar no sistema</h2>

        <form action="{{route('logar')}}" method="POST">
            @csrf 
            <div class="form-group">
                Login:
                <input type="text" name="login" class="form-control" />
            </div>

            <div class="form-group">
                senha:
                <input type="password" name="senha" class="form-control" />
            </div>

            <input type="submit" value="logar" class="btn btn-lg btn-primary">
        </form>
    </div>
@endsection