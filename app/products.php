<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable=[
        'product_name',
        'product_price',
        'product_category',
        'product_image',
        'product_details',
        'product_count'
    ];
}
