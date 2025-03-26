<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $table = "tb_classe";
    protected $fillable = [
        'nm_classe',
        'id_curso',
    ];
    protected $primaryKey = 'id_classe';
}
