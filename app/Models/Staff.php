<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
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
