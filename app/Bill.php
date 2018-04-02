<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
	 protected $fillable = ['customer_id','total','note'];

      public function Bill(){
    	return $this->hasMany("App\Bill_detail");
    }

      public function Customer(){
    	return $this->hasMany("App\Customer");
    }
}
