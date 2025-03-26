<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'tb_evento';
    protected $fillable = [
        'nm_evento',
        'dt_inicio',
        'dt_fim',
        'ds_tipo'
    ];

    protected $casts = [
        'dt_inicio' => 'datetime',
        'dt_fim' => 'datetime',
    ];

    protected $primaryKey = 'id_evento';
}
