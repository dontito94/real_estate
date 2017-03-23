<?php

namespace App;
use App\Http\Controllers\Product;

use Illuminate\Database\Eloquent\Model;

class property extends Model
{
	 public $table = "products";
       public $fillable = ['name','details'];
}
