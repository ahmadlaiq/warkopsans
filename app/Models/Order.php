<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'orders';

    protected $fillable = [
        'meja_id',
        'invoice_number',
        'customer_name',
        'customer_request',
        'status',
        'total_amount',
        'payment_method',
    ];

    public function meja()
    {
        return $this->belongsTo(Meja::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getCustomerNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPaymentMethodAttribute($value)
    {
        return ucfirst($value);
    }

    public function getTotalAmountAttribute($value)
    {
        return 'Rp ' . number_format($value, 0, ',', '.');
    }
}
