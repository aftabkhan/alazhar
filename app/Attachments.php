<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    protected $table = 'attachments';
    protected $fillable = ['attachment'];
}
