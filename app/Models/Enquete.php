<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{
    protected $table = "enquete";
    protected $primaryKey = "id_enquete";
    protected $fillable = ['enquete_resposta','enquete_data','enquete_questionamento'];
    public $incrementing = true;
    public $timestamps = false;
}
