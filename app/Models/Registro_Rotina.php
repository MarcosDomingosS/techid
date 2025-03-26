<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro_Rotina extends Model
{
    protected $table = "tb_registro_rotina";
    protected $fillable = [
        'id_rotina',
        'id_aluno_classe',
    ];
    protected $primaryKey = 'id_registro_rotina';
}
