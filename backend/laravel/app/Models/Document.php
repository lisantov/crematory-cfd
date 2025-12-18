<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
