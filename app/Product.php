<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['id','catalog_id','name','price','image_link','image_list','content','sort_content','discount','view','slug','status','qty_sold','price_discount','user_id','created_at','updated_at'];
    public function Catalog(){
    	return $this->belongsto("App/Catalog");
    }
     public function User(){
    	return $this->belongsto("App/User");
    }
     public function Oder(){
    	return $this->hasMany("App/Oder");
    }
    
 
}
