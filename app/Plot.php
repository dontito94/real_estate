<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $fillable =['plotName'];


    public function Property(){
        return $this->hasMany(Property::class);
    	
    }
}
