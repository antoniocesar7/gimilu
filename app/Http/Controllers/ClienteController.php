<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){
        $data = [

        ];

        return view('cadastrar',$data);
    }

    public function cadastrarCliente(Request $request){

        // $nome = $request->input('nome','');
        // dd($nome);

        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);//seta o que estiver no fillable, evitando fazer $request->nome, etc
        //dd($values);

        $enderecos = new Endereco($values);
        $enderecos->logradouro = $request->input('endereco','');
        //dd($enderecos);
        return redirect()->route('cadastrar');
    }
}
