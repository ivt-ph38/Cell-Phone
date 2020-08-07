<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
        'category_id','name','title','description','price','quantity','size','weight','color','image','display','os','storage','ram','cpu','gpu','primary_camera','rear_camera','battery','warranty','promotion_price','start_promotion','end_promotion'
    ];

    public function category(){ //khai bao quan he 1 nhieu với bảng category
        return $this->belongsTo('App\Category','category_id');
   }

    
}

