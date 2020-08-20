<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','guest_id','status_id', 'deliverer_id', 'total_price', 'note' ];
    public function order_details()
    {
       return $this->hasMany('App\Order_detail');
    }
}
