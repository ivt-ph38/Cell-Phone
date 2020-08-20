<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
     protected $fillable = [
        'user_id', 'status_id', 'deliverer_id', 'total_price','create_date','delivery_address','note','guest_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function status()
    {
        return $this->belongsTo('App\Status');
    }
    public function deliverer()
    {
        return $this->belongsTo('App\Deliverer');
    }
    public function guest()
    {
        return $this->belongsTo('App\Guest');
    }
    
    public function order_details (){
         return $this->hasMany('App\Order_detail');
    }
}
