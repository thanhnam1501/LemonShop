<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
	protected $fillable = ['name','content'];
    public function Product(){
    	return $this->hasMany("App\Product");
    }


}
