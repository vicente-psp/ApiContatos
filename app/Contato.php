<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
