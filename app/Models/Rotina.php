<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rotina extends Model
{
    protected $table = "tb_rotina";
    protected $fillable = [
        'ds_tipo',
    ];
    protected $primaryKey = 'id_rotina';
}
