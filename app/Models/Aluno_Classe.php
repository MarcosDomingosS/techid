<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno_Classe extends Model
{
    protected $table = "tb_aluno_classe";
    protected $fillable = [
        'nr_rm',
        'id_classe',
    ];

    protected $primaryKey = 'id_aluno_classe';
}
