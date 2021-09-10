<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'totalPrice',
        'shipName',
        'shipPhone',
        'shipAddress',
        'note',
        'isCheckout',
        'status'
    ];
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class, 'orderId', 'id');
    }
}
