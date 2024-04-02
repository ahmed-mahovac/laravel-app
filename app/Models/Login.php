<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'password', 'locale', 'type'];

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }
}
