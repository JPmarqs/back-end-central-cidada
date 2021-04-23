<?php

namespace App\Http\Controllers;

use App\Models\Bairro;
use Illuminate\Http\Request;

class BairroController extends Controller
{
    private $bairro;
    public function __construct()
    {
        $this->bairro = new Bairro();
    }
    public function index(){
        
        $bairro = $this->bairro->all();
        return response()->json($bairro);
    }
    
    
    public function update(Request $request){
        
        $bairro = $request->all();
        
        
        $pesquisaPorIdBanco = $this->bairro->find($bairro['id_enquete']);
        $pesquisaPorIdBanco->update($bairro);
        return response()->json('bairro Atualizada com sucesso !!');
                
        

    }
    public function store(Request $request){
        
        $bairro = $request->all();
        
                
        $this->bairro->create($bairro);
        return response()->json('Bairro cadastrado com sucesso!!',200);
                
                
           
        
    }
    public function delete(Request $request){
        $bairro = $request->all();
          

        $bairro = $this->bairro->find($bairro['id_enquete']);
        $bairro->delete();
        return response()->json('Marca deletada com sucesso !!',200);

       
    }
}
