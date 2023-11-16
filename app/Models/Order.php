<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'customer_id',
        'order_items_id',
        'order_status',
    ];

    public function customer() {
        return $this->belongsTo(User::class);
    }

    public function items() {
        return $this->hasMany(Order_items::class);
    }
}
