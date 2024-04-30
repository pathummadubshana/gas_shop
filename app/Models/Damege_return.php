<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damege_return extends Model
{
    use HasFactory;
    protected $fillable = [
        'value',
        'name',
        'mobile',
        'area',
        'address',
        'sales',
        'vehical',
        'return',
        'product',
        'qty',


    ];

}
