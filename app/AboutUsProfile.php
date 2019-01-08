<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class AboutUsProfile extends Model
{
    protected $table = 'aboutus-profile';

     protected $fillable = ['page_title_en','page_title_ar','profile_en','profile_ar'];
}
