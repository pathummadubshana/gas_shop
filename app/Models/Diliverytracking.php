<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diliverytracking extends Model
{
    use HasFactory;
    protected $fillable = [
        'product',
        'code',
        'status',
        'area',
        


    ];
}
