<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliveryrouting extends Model
{
    use HasFactory;
    protected $fillable = [
        'product',
        'area',
        'vnumber',
        'emloyee',
        'mobile',
        



    ];

}
