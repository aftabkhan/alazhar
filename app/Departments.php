<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Departments extends Model
{
	
    
    protected $dates = ['deleted_at'];

    protected $table = 'departments';  
    protected $fillable = ['name_en'];
}
