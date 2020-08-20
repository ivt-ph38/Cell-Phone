<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name','phone', 'email'
    ];
    public function orders (){
        return $this->hasMany('App\Order');
    }
}
