<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function logar(Request $request){
        $data = [];

        if($request->isMethod("POST")){
            //clicou em logar
            $login = $request->input('login');
            $senha = $request->input('senha');

            $credencial = [
                'login'     => $login, 
                'password'  => $senha    
            ];

            if(Auth::attempt($credencial)){
                //dd("logado");
                return redirect()->route('home');
            }else{
                //dd("dados invalido");
                $request->session()->flash('err','usuario / senha invalido');
                return redirect()->route('logar');
            }
        }

        return view('logar',$data);
    }
}
