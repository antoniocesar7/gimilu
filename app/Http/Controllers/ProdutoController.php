<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request){
        
        $listaProdutos = Produto::all();//select * from produtos
        $data['listas'] = $listaProdutos;

        return view('home',$data); 

    }

    public function categoria($idCategoria = 0, Request $request){
        
        $listaCategorias = Categoria::all();//SELECT * FROM CATEGORIAS

        //$listaProdutos = Produto::limit(4)->get();//SELECT * FROM PRODUTOS LIMIT 4

        $queryProdutos = Produto::limit(4);

        if($idCategoria != 0){
            //WHERE idCategoria = $idCategoria
            $queryProdutos->where('id_categorias',$idCategoria);
        }

        $data['listas'] = $queryProdutos->get();
        $data['listaCategorias'] = $listaCategorias;
        $data['idCategoria'] = $idCategoria;


        return view('categoria',$data);
    }

    public function adicionarCarrinho($idProduto = 0, Request $request){
        //Buscar o produto pelo id
        $prod = Produto::find($idProduto);
        

        if($prod){
            //Encontrou um produto


            //Buscar da sessão o carrinho atual

            $carrinho = session('cart', []);

            array_push($carrinho,$prod); //adicionando no array do carrinho o produto que o usuário clicou
            session(['cart' => $carrinho]);//gravando na sessão carto objeto carrinho
        }

        return redirect()->route('home');
    }

    public function verCarrinho(Request $request){
        $carrinho = session('cart',[]);
        dd($carrinho);
    }
}
