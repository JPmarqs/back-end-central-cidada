<?php

namespace App\Http\Controllers;

use App\Models\Solicitacao;
use Illuminate\Http\Request;

class SolicitacaoController extends Controller
{
    private $solicitacao;
    public function __construct()
    {
        $this->solicitacao = new Solicitacao();
    }
    public function index(){
        
        $solicitacao = $this->solicitacao->select();
        return response()->json($solicitacao);
    }
    
    
    public function update(Request $request){
        
        $solicitacao = $request->all();
        
        
        $find = $this->solicitacao->find($solicitacao['id_solicitacao']);
        $find->update($solicitacao);
        return response()->json('solicitacao Atualizada com sucesso !!');
                
        

    }
    public function store(Request $request){
        
        $solicitacao = $request->all();
        
                
        $this->solicitacao->create($solicitacao);
        return response()->json('solicitacao cadastrado com sucesso!!',200);
                
                
           
        
    }
    public function delete(Request $request){
        $solicitacao = $request->all();
          

        $solicitacao = $this->solicitacao->find($solicitacao['id_solicitacao']);
        $solicitacao->delete();
        return response()->json('solicitacao deletada com sucesso !!',200);

       
    }
}
