<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fila01 extends Model
{
    protected $table = 'fila01';


    protected $fillable = [
        'id', 'player', 'game', 'status'
    ];
}
