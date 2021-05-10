<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = "administrador";
    protected $primaryKey = "administrador_matricula";
    protected $fillable = ['administrador_matricula','administrador_nome','administrador_fone','administrador_email','administrador_senha'];
    public $incrementing = true;
    public $timestamps = false;
}
