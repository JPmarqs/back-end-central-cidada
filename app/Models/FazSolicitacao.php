<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FazSolicitacao extends Model
{
    protected $table = "faz_solicitacao";
    protected $primaryKey = "id_faz_solicitacao";
    protected $fillable = ['faz_solicitacao_data'];
    public $incrementing = true;
    public $timestamps = false;
}
