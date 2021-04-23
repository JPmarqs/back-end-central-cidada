<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    protected $table = "bairro";
    protected $primaryKey = "id_bairro";
    protected $fillable = ['bairro_cep','bairro_complemento','bairro_nome','bairro_logradouro'];
    public $incrementing = true;
    public $timestamps = false;

    public function select(){

    }
}
