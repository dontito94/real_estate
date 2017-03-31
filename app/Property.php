<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
   protected $fillable =['propertyName','region','plotNo','floorNo','status',];


      public function Plot(){

   return $this->belongTo(Plot::class);


   }
}
