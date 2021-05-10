<?php

namespace App\Http\Controllers;

use App\Models\Membros;
use Illuminate\Http\Request;

class MembrosController extends Controller
{
    private $membros;
    public function __construct()
    {
        $this->membros = new Membros();
    }
    public function index(){
        
        $membros = $this->membros->all();
        return response()->json($membros);
    }
    
    
    public function update(Request $request){
        
        $membros = $request->all();
        
        
        $find = $this->membros->find($membros['id_membro']);
        $find->update($membros);
        return response()->json('Membro Atualizada com sucesso !!');
                
        

    }
    public function store(Request $request){
        
        $membros = $request->all();
        
                
        $this->membros->create($membros);
        return response()->json('Membro cadastrado com sucesso!!',200);
                
                
           
        
    }
    public function delete(Request $request){
        $membros = $request->all();
          

        $membros = $this->membros->find($membros['id_membro']);
        $membros->delete();
        return response()->json('Membro deletada com sucesso !!',200);

       
    }
}
