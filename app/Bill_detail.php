<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
   protected $fillable = ['bill_id','product_id','quanlity','price'];

     public function Bill(){
    	return $this->hasMany("App\Bill");
    }
}
