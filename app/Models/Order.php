<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['total_price','id_customer','order_code','order_date','order_end_date','order_status'];
    public function customer(){
        return $this->belongsTo(Customer::class,'id_customer','id');
    }
}
