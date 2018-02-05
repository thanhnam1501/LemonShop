<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    public function Transaction(){
    	return $this->belongsto("App\Transaction");
    }
}
