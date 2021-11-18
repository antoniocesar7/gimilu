<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Services\ClienteService;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $senha = $request->input('password','');
        $usuario->password = Hash::make($senha);//criptografando

        
        $enderecos = new Endereco();
        $enderecos->fill($values);
        $enderecos->logradouro = $request->input('endereco','');
        //dd($enderecos);

        // try{
        //     DB::beginTransaction();//Iniciar uma transação
        //     $usuario->save();
        //     $enderecos->id_usuarios = $usuario->id;
        //     $enderecos->save();
        //     DB::commit();//Confirmando a transação
        // }catch(\Exception $e){
        //     DB::rollBack();//Cancelar a transação
        // }
        $clienteService = new ClienteService();
        $resultado = $clienteService->salvarUsuario($usuario,$enderecos);
        //dd($resultado);
        $message = $resultado['message'];
        $status = $resultado['status'];
        $request->session()->flash($status,$message); //Gravar os valores em uma requisição, se ok=Cadastrado com..., se err=Erro no cadas...
        
        return redirect()->route('cadastrar');
    }
}
