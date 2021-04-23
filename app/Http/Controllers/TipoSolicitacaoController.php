<?php

namespace App\Http\Controllers;

use App\Models\TipoSolicitacao;
use Illuminate\Http\Request;

class TipoSolicitacaoController extends Controller
{
    private $tipo_solicitacao;
    public function __construct()
    {
        $this->tipo_solicitacao = new TipoSolicitacao();
    }
    public function index(){
        
        $tipo_solicitacao = $this->tipo_solicitacao->all();
        return response()->json($tipo_solicitacao);
    }
    
    
    public function update(Request $request){
        
        $tipo_solicitacao = $request->all();
        
        
        $find = $this->tipo_solicitacao->find($tipo_solicitacao['id_tipo_solicitacao']);
        $find->update($tipo_solicitacao);
        return response()->json('tipo solicitacao Atualizada com sucesso !!');
                
        

    }
    public function store(Request $request){
        
        $tipo_solicitacao = $request->all();
        
                
        $this->tipo_solicitacao->create($tipo_solicitacao);
        return response()->json('tipo solicitacao cadastrado com sucesso!!',200);
                
                
           
        
    }
    public function delete(Request $request){
        $tipo_solicitacao = $request->all();
          

        $tipo_solicitacao = $this->tipo_solicitacao->find($tipo_solicitacao['id_tipo_solicitacao']);
        $tipo_solicitacao->delete();
        return response()->json('tipo solicitacao deletada com sucesso !!',200);

       
    }
}
