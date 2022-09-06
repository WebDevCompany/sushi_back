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
        return $this->hasOne(Payment_type::class);
    }

    public function delivery_type_by_time()
    {
        return $this->hasOne(Delivery_type_by_time::class);
    }

    public function promo_code()
    {
        return $this->hasOne(Promo_code::class);
    }

    public function delivery_type()
    {
        return $this->hasOne(Delivery_type::class);
    }

    public function purchase()
    {
        return $this->hasMany(Purchase::class, 'products_id');
    }

    public function order_status()
    {
        return $this->hasOne(Order_status::class, 'products_id');
    }

}
