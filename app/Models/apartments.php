<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apartments extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'price',
        'information',
        'informationDetail',
        'Thumnail',
        'status'
    ];

}
