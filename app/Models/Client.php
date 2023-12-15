<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'client_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'email',
        'password',
        'contact_number',
        'profile_picture_path',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    // You might want to define other relationships or methods here
}
