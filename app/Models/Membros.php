<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membros extends Model
{
    protected $table = "membro";
    protected $primaryKey = "id_membro";
    protected $fillable = ['id_membro',	'membro_nome','membro_cpf','membro_email','membro_fone','membro_senha','membro_cep','fk_id_faz_solicitacao','membro_bairro','membro_logradouro','membro_complemento'];
    public $incrementing = true;
    public $timestamps = false;


    public $rules = [
        'membro_nome' => 'required',
        'membro_cpf' => 'required',
        'membro_email' => 'required',
        'membro_fone' => 'required',
        'membro_senha' => 'required',
        'membro_cep' => 'required',
        'membro_bairro' => 'required',
        'membro_logradouro' => 'required',
        'membro_complemento' => 'required'

        
    ];

    
}
