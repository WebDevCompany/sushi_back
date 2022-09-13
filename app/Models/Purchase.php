<?php
//AlexKhor
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }
}
