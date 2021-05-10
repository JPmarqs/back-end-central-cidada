<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Util\Jwt;
use App\Models\Administrador;
use App\Models\Membros;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $jwt;
    private $membro;
    private $adm;
    public function __construct(){
        $this->jwt = new Jwt();
        $this->membro = new Membros();
        $this->adm = new Administrador();
    }
    public function gerarToken(){
        
        return response()->json(trim($this->jwt->gerarToken("gustavo","5","usuario")));
    }
    public function verificarToken(Request $request){
        $token = $request->header('Authorization');
       
        $dados = $this->jwt->verificarToken($token);

        if($dados == false){
            return response()->json('erro no token !!',401);
        }else{
            return response()->json($dados);
        }
        
        
    }
    
    public function loginMembro(Request $request){
        $valores = $request->only(['cpf', 'senha']);
        
        $valor = $this->membro->where([['membro_cpf','=',$valores['cpf']],['membro_senha','=',$valores['senha']]])->first();
        
        if($valor == null){
            return response()->json('error ao Logar!!',400);
        }else{
            return response()->json(trim($this->jwt->gerarToken($valor['membro_nome'],$valor['id_membro'],"membro")));
        }
        

    }
    public function loginAdm(Request $request){
        $valores = $request->only(['email', 'senha']);
        
        $valor = $this->adm->where([['administrador_email','=',$valores['email']],['administrador_senha','=',$valores['senha']]])->first();
        
        if($valor == null){
            return response()->json('error ao cadastrar!!',400);
        }else{
            return response()->json(trim($this->jwt->gerarToken($valor['administrador_nome'],$valor['administrador_matricula'],"adm")));
        }
        

    }
}
