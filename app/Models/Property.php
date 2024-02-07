<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'surface',
        'price',
        'rooms',
        'bedrooms',
        'floor',
        'address',
        'city',
        'postal_code',
        'sold',
    ];

}
