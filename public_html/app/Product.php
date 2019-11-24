<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'or_date', 'c_id', 'or_product'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
