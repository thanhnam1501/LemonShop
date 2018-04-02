<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $fillable = ['name','email','address','phone',];
   
     public function Bill(){
    	return $this->hasMany("App\Bill");
    }
}
