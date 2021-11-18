<?php

namespace App\Services;

use App\Endereco;
use App\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClienteService {
    public function salvarUsuario(Usuario $usuario, Endereco $enderecos){
        try{
            
            $dbUsuario = Usuario::where("login", $usuario->login)->first();//Verificando se já existe o login para ser salvo no banco
            if($dbUsuario){
                return ['status' => 'err', 'message' => 'Login cadastrado!!!'];
            }

            DB::beginTransaction();//Iniciar uma transação
            $usuario->save();
            $enderecos->id_usuarios = $usuario->id;
            $enderecos->save();
            DB::commit();//Confirmando a transação
            return ['status' => 'ok', 'message' => 'Usuário cadastrado com sucesso!'];
        }catch(\Exception $e){
            Log::error("Erro",[
                'file'    => 'ClienteService.salvarUsuario',
                'message' => $e->getMessage()
            ]);
            DB::rollBack();//Cancelar a transação
            return ['status' => 'err', 'message' => 'Problemas ao cadastrar o usuário!!!'];
        }
    }
}