<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'result';

    protected $fillable = [
        'fr', 'sr', 'added_date','add_time',
    ];

}
