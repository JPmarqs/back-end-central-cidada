<?php

namespace App\Http\Controllers;

use App\Models\Enquete;
use Illuminate\Http\Request;

class EnqueteController extends Controller
{
    private $enquete;
    public function __construct()
    {
        $this->enquete = new Enquete();
    }
    public function index(){
        
        $enquete = $this->enquete->all();
        return response()->json($enquete);
    }
    
    
    public function update(Request $request){
        
        $enquete = $request->all();
        
        
        $find = $this->enquete->find($enquete['id_enquete']);
        $find->update($enquete);
        return response()->json('enquete Atualizada com sucesso !!');
                
        

    }
    public function store(Request $request){
        
        $enquete = $request->all();
        
                
        $this->enquete->create($enquete);
        return response()->json('enquete cadastrado com sucesso!!',200);
                
                
           
        
    }
    public function delete(Request $request){
        $enquete = $request->all();
          

        $enquete = $this->enquete->find($enquete['id_enquete']);
        $enquete->delete();
        return response()->json('enquete deletada com sucesso !!',200);

       
    }
}
