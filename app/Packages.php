<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    
    protected $table = 'packages';

    protected $fillable = [
        'name', 'mrp', 'special_price'
    ];

}
