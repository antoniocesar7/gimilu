<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){
        $data = [ ];

        return view('cadastrar',$data);
    }

    public function cadastrarCliente(Request $request){

        // $nome = $request->input('nome','');
        // dd($nome);

        $values = $request->all();

        $usuario = new Usuario();
        $usuario->fill($values);//seta o que estiver no fillable, evitando fazer $request->nome, etc //dd($values);
        $usuario->login = $request->input('cpf','');

        
        $enderecos = new Endereco();
        $enderecos->fill($values);
        $enderecos->logradouro = $request->input('endereco','');
        //dd($enderecos);

        try{
            $usuario->save();
            $enderecos->id_usuarios = $usuario->id;
            $enderecos->save();
        }catch(\Exception $e){

        }
        return redirect()->route('cadastrar');
    }
}
