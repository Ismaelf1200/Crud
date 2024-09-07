<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Agrega los campos que puedes asignar masivamente
    protected $fillable = [
        'name',
        'price',
        'description',
    ];
}
