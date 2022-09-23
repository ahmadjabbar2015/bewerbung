<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    function order()
    {
        return $this->belongsTo(Order::class);

    }
}
