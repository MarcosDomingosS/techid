<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro_Evento extends Model
{
    protected $table = "tb_registro_evento";
    protected $fillable = [
        'id_evento',
        'id_aluno_classe',
    ];
    protected $primaryKey = 'id_registro_evento';
}
