<?php

namespace App\Http\Controllers;

use App\Models\AnaliseAcompanha;
use Illuminate\Http\Request;

class AnaliseAcompanhaController extends Controller
{
    private $analise_acompanha;
    public function __construct()
    {
        $this->analise_acompanha = new AnaliseAcompanha();
    }
    public function index(){
        
        $analise_acompanha = $this->analise_acompanha->select();
        return response()->json($analise_acompanha);
    }
    
    
    public function update(Request $request){
        
        $analise_acompanha = $request->all();
        
        
        $find = $this->analise_acompanha->find($analise_acompanha['analise_acompanha_protocolo']);
        $find->update($analise_acompanha);
        return response()->json('Analise do Acompanhamento com sucesso !!');
                
        

    }
    public function store(Request $request){
        
        $analise_acompanha = $request->all();
        
                
        $this->analise_acompanha->create($analise_acompanha);
        return response()->json('Analise do Acompanhamento cadastrado com sucesso!!',200);
                
                
           
        
    }
    public function delete(Request $request){
        $analise_acompanha = $request->all();
          

        $analise_acompanha = $this->analise_acompanha->find($analise_acompanha['analise_acompanha_protocolo']);
        $analise_acompanha->delete();
        return response()->json('Analise do Acompanhamento deletada com sucesso !!',200);

       
    }
}
