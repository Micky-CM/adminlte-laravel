<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'provider',
        'date',
        'ubication',
        'observation'
    ];
}
