<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    private $administrador;
    public function __construct()
    {
        $this->administrador = new Administrador();
    }
    public function index(){
        
        $administrador = $this->administrador->all();
        return response()->json($administrador);
    }
    
    
    public function update(Request $request){
        
        $administrador = $request->all();
        
        
        $find = $this->administrador->find($administrador['administrador_matricula']);
        $find->update($administrador);
        return response()->json('Faz solicitacao Atualizada com sucesso !!');
                
        

    }
    public function store(Request $request){
        
        $administrador = $request->all();
        
                
        $this->administrador->create($administrador);
        return response()->json('Faz solicitacao cadastrado com sucesso!!',200);
                
                
           
        
    }
    public function delete(Request $request){
        $administrador = $request->all();
          

        $administrador = $this->administrador->find($administrador['administrador_matricula']);
        $administrador->delete();
        return response()->json('Faz solicitacao deletada com sucesso !!',200);

       
    }
}
