<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class designations extends Model
{
    protected $fillable = [
    	'title',
    ];

    //Table Relation
    public function empDesignation(){
        return $this->hasMany('App\designations','designation_id');
    } 
}
