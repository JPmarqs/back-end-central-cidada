<?php

namespace App\Http\Controllers;

use App\Models\FazSolicitacao;
use Illuminate\Http\Request;

class FazSolicitacaoController extends Controller
{
    private $faz_solicitacao;
    public function __construct()
    {
        $this->faz_solicitacao = new FazSolicitacao();
    }
    public function index(){
        
        $faz_solicitacao = $this->faz_solicitacao->all();
        return response()->json($faz_solicitacao);
    }
    
    
    public function update(Request $request){
        
        $faz_solicitacao = $request->all();
        
        
        $find = $this->faz_solicitacao->find($faz_solicitacao['id_faz_solicitacao']);
        $find->update($faz_solicitacao);
        return response()->json('Faz solicitacao Atualizada com sucesso !!');
                
        

    }
    public function store(Request $request){
        
        $faz_solicitacao = $request->all();
        
                
        $this->faz_solicitacao->create($faz_solicitacao);
        return response()->json('Faz solicitacao cadastrado com sucesso!!',200);
                
                
           
        
    }
    public function delete(Request $request){
        $faz_solicitacao = $request->all();
          

        $faz_solicitacao = $this->faz_solicitacao->find($faz_solicitacao['id_faz_solicitacao']);
        $faz_solicitacao->delete();
        return response()->json('Faz solicitacao deletada com sucesso !!',200);

       
    }
}
