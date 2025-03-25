<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'tb_evento';
    protected $fillable = [
        'nm_evento',
        'dt_evento'
    ];

    protected $casts = [
        'dt_evento' => 'datetime',
    ];

    protected $primaryKey = 'id_evento';
}
