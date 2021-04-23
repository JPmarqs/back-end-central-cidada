<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoSolicitacao extends Model
{
    protected $table = "tipo_solicitacao";
    protected $primaryKey = "id_tipo_solicitacao";
    protected $fillable = ['tipo_solicitacao_categoria'];
    public $incrementing = true;
    public $timestamps = false;
}
