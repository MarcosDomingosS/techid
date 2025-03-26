<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = "tb_cargo";
    protected $fillable = [
        'ds_permissoes',
    ];
    protected $primaryKey = 'id_cargo';
}
