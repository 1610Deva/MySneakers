<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public function product()
    {
        return $this->belongsTo(TableProducts::class, 'product_id');
    }
    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }
}
