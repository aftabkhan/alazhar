<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class Package_Points extends Model
{
    protected $table = 'packages_points';

    protected $fillable = [ 'notes', 'package_id'];


    public static function getPackages(){
    	$result = Package_Points::select('packages.id','packages.name as name','packages.mrp','packages.special_price','packages_points.notes')
    							->leftJoin('packages', 'packages_points.package_id', '=', 'packages.id'); 
    	return $result;
    }
}
