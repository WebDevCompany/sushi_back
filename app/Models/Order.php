<?php
//AlexKhor
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function payment_type()
    {
        return $this->hasOne(Payment_type::class, 'id', 'payment_type_id');
    }

    public function delivery_type_by_time()
    {
        return $this->hasOne(Delivery_type_by_time::class, 'id', 'delivery_type_by_time_id');
    }

    public function promo_code()
    {
        return $this->hasOne(Promo_code::class, 'id', 'promo_code_id');
    }

    public function delivery_type()
    {
        return $this->hasOne(Delivery_type::class, 'id', 'delivery_type_id');
    }

    public function purchase()
    {
        return $this->hasMany(Purchase::class, 'orders_id', 'id');
    }

    public function order_status()
    {
        return $this->hasOne(Order_status::class, 'id', 'order_statuses_id');
    }

}
