<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $table = 'rentals';
    protected $primaryKey = 'rental_id';

    protected $fillable = [
        'rental_date',
        'rental_time',
        'return_date',
        'return_time',
        'status',
    ];
}
