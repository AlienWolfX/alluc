<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use Notifiable, HasFactory, HasApiTokens;

    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'name',
        'last_name',
        'age',
        'email',
        'password',
        'contact_number',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function clients()
    {
        return $this->hasMany(Client::class, 'admin_id');
    }

    public function staffMembers()
    {
        return $this->hasMany(Staff::class, 'admin_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'admin_id');
    }
}
