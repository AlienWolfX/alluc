<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Staff extends Authenticatable
{
    use Notifiable, HasFactory, HasApiTokens;

    protected $guard = 'staff';
    protected $primaryKey = 'staff_id';

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
}
