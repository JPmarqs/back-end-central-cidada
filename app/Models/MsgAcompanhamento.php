<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MsgAcompanhamento extends Model
{
    protected $table = "msg_acompanhamento";
    protected $primaryKey = "id_msg_acompanhamento";
    protected $fillable = ['id_msg_acompanhamento','msg_acompanhamento_descricao','fk_id_membro','fk_id_solicitacao'];
    public $incrementing = true;
    public $timestamps = false;


    public function select(){
        return $this->join('membro','msg_acompanhamento.fk_id_membro','=','membro.id_membro')
                    ->join('solicitacao','solicitacao.id_solicitacao','=','msg_acompanhamento.fk_id_solicitacao')
                    
                    ->select(DB::raw('*'))
                    ->get();
    }
}
