<?php

namespace App\Http\Controllers;

use App\Models\MsgAcompanhamento;
use Illuminate\Http\Request;

class MsgAcompanhamentoController extends Controller
{
    private $msg_acompanhamento;
    public function __construct()
    {
        $this->msg_acompanhamento = new MsgAcompanhamento();
    }
    public function index(){
        
        $msg_acompanhamento = $this->msg_acompanhamento->select();
        return response()->json($msg_acompanhamento);
    }
    
    
    public function update(Request $request){
        
        $msg_acompanhamento = $request->all();
        
        
        $find = $this->msg_acompanhamento->find($msg_acompanhamento['id_msg_acompanhamento']);
        $find->update($msg_acompanhamento);
        return response()->json('Msg Acompanhamento Atualizada com sucesso !!');
                
        

    }
    public function store(Request $request){
        
        $msg_acompanhamento = $request->all();
        
                
        $this->msg_acompanhamento->create($msg_acompanhamento);
        return response()->json('Msg Acompanhamento cadastrado com sucesso!!',200);
                
                
           
        
    }
    public function delete(Request $request){
        $msg_acompanhamento = $request->all();
          

        $msg_acompanhamento = $this->msg_acompanhamento->find($msg_acompanhamento['id_msg_acompanhamento']);
        $msg_acompanhamento->delete();
        return response()->json('Msg Acompanhamento deletada com sucesso !!',200);

       
    }
}
