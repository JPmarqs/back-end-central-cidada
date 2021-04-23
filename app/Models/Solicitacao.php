<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Solicitacao extends Model
{
    protected $table = "solicitacao";
    protected $primaryKey = "id_solicitacao";
    protected $fillable = ['solicitacao_titulo','solicitacao_descricao','solicitacao_midia','solicitacao_status','solicitacao_avaliacao','fk_id_tipo_solicitacao','fk_id_faz_solicitacao','fk_id_bairro'];
    public $incrementing = true;
    public $timestamps = false;

    public function select(){
        return $this->join('tipo_solicitacao','solicitacao.fk_id_tipo_solicitacao','=','tipo_solicitacao.id_tipo_solicitacao')
                    ->join('faz_solicitacao','solicitacao.fk_id_faz_solicitacao','=','faz_solicitacao.id_faz_solicitacao')
                    ->join('bairro','solicitacao.fk_id_bairro','=','bairro.id_bairro')
                    ->select(DB::raw('*'))
                    ->get();
    }
}
