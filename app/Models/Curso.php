<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "tb_aluno";
    protected $fillable = [
        'nm_curso',
    ];
    protected $primaryKey = 'id_curso';
}
