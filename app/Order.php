<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = ['order_no', 'name', 'email', 'phone', 'address'];

    public function products()
    {
        return $this->hasMany(OrderProduct::class, 'order_id', 'id');
    }
}
