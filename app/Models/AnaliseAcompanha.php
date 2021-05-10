<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnaliseAcompanha extends Model
{
    protected $table = "analise_acompanha";
    protected $primaryKey = "analise_acompanha_protocolo";
    protected $fillable = ['analise_acompanha_protocolo','analise_acompanha_data','analise_acompanha_descricao'	,'fk_matricula_administrador','fk_id_solicitacao'];
    public $incrementing = true;
    public $timestamps = false;

    public function select(){
        return $this->join('administrador','analise_acompanha.fk_matricula_administrador','=','administrador.administrador_matricula')
                    ->join('solicitacao','solicitacao.id_solicitacao','=','analise_acompanha.fk_id_solicitacao')
                    ->select(DB::raw('*'))
                    ->get();
    }
}
