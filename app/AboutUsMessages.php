<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class AboutUsMessages extends Model
{
   protected $table = 'aboutus-messages';

   protected $fillable = ['page_title_en','page_title_ar','name_en','name_ar','profile_en','profile_ar','message_en','message_ar','message_by'];
}
