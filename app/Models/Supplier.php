<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'address'];

    public function inventorieslist(){
        return $this->hasMany(Inventario::class);
    }
}
