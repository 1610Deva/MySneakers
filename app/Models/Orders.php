<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'order_id');
    }
}
