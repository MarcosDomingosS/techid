<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = "tb_aluno";
    protected $primaryKey = 'nr_rm';
    public $incrementing = false;
    protected $keytype = 'string';
    protected $fillable = [
        'nr_rm',
        'nm_aluno',
        'id_rfid',
        'img_aluno',
    ];
}
