<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RFID extends Model
{
    protected $table = "tb_rfid";
    protected $fillable = [
        'cd_rfid',
    ];
    protected $primaryKey = 'id_rfid';
}
