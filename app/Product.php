<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use  SoftDeletes;
    protected $table = 'products';
	protected $fillable = [
        'category_id','name','title','description','price','quantity','size','weight','color','image','display','os','storage','ram','cpu','gpu','primary_camera','rear_camera','battery','warranty','promotion_price','start_promotion','end_promotion'
    ];
    protected $dates = ['deleted_at'];

    public function category (){
        return $this->belongsTo('App\Category');
   }
    public function order_details()
    {
        return $this->hasMany('App\Order_detail');
    }
    
}

