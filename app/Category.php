<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];
    public function products(){ //khai bao quan he 1 nhieu với bảng Product
    	return $this->hasMany('App\Product');
    }
}
