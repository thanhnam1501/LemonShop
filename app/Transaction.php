<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['id','user_id','oder_id','amount','payment','payment_info','message','security'];

     public function Oder(){
    	return $this->belongsto("App/Oder");
    }
}
