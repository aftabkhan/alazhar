<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contact_messages';
    protected $fillable = ['contacted_id','message','reason'];

    public static function getContactedUsers(){
    	$result =   Contacts::select('users.name as name','message','reason','contact_messages.created_at')
                              ->leftJoin('users', 'contact_messages.contacted_id', '=', 'users.id')
                              ->get();
        return $result;
    }
}
