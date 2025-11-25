<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'name',
        'product_id',
        'quantity',
        'total_price',
        'note',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
