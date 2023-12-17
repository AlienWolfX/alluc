<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $primaryKey = 'car_id';

    protected $fillable = [
        'plate_number',
        'car_name',
        'description',
        'car_model_year',
        'color',
        'rate',
        'status',
        'image'
    ];

}
