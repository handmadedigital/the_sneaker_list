<?php

namespace HMD;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_number', 'user_id', 'brand', 'model', 'size', 'status', 'price', 'link'];

    public function user()
    {
        return $this->belongsTo('HMD\User');
    }
}
