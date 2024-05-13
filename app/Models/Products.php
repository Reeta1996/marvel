<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [

        'product_name',
        'brand_name',
        'colors',
        //'category_id',
        'currency',
        'price',
        'quantity',
          'desc',
          'image'
    ]; 

    public function categories()
    {
        return $this->BelongsToMany(Category::class);
    }

}


