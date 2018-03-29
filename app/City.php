<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
protected $fillable = ['region_id','region_name','parent_id','sort_order'];
}
