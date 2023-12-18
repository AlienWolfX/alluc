<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'rental_id',
        'admin_id',
        'add_charges',
        'payment_date',
        'payment_time',
        'payment_amount',
    ];
}
