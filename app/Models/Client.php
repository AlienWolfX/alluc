<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $guard = 'client';
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
