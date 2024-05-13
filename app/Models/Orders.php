<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [

        'order_number',
        'product_id',
        'user_id',
        'category_id',
        'customer_name',
        'date',
        'amount',
        'payment_status',
        'payment_mode',
        'status'
          
    ]; 

}
