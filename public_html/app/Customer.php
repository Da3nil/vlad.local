<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'c_phone', 'c_name', 'c_total_profit', 'c_last_date_arrival'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

}
