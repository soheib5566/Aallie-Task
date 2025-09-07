<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesData extends Model
{
    protected $fillable = [
        'product',
        'q1_sales',
        'q2_sales',
        'q3_sales',
        'q4_sales',
        'target',
    ];
}
