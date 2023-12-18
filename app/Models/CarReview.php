<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarReview extends Model
{
    use HasFactory;

    protected $table = 'car_reviews';
    protected $primaryKey = 'review_id';

    protected $fillable = [
        'client_id',
        'car_id',
        'review_score',
        'date_review',
    ];
}
