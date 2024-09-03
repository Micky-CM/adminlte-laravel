<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'ci', 'birth_date', 'gender', 'email', 'phone', 'address'];

    public function inscription(){
        return $this->hasMany(Inscription::class);
    }
}
