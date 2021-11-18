<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIMILU - Moda Infantil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    @yield("scriptjs")
</head>

<body>
   
   <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">GIMILU MODA INFANTIL</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{route('home')}}">Home</a>
                <a class="nav-link" href="{{route('categoria')}}">Categorias</a>
                <a class="nav-link" href="{{route('cadastrar')}}">Cadastrar</a>
                <a class="nav-link" href="{{route('logar')}}">Logar</a>
            </div>
        </div>
        <a href="{{route('verCarrinho')}}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a> <!-- carrinho -->
   </nav>

   <div class="container">
       <div class="row">
            @if($message = Session::get("err"))
                <div class="col-12">
                    <div class="alert alert-danger">{{$message}}</div>
                </div>
            @endif

            @if($message = Session::get("ok"))
                <div class="col-12">
                    <div class="alert alert-success">{{$message}}</div>
                </div>
            @endif

           <!-- Nesta DIV teremos uma área que os outros arquivos irão add conteudo -->
           @yield("conteudo")
        </div>
    
   </div>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
<!-- <script src="{{asset('site/jquery.js')}}"></script>
<script src="{{asset('site/bootstrap.js')}}"></script> -->
</body>
</html>