<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = ['login_id'];

    public function login()
    {
        return $this->belongsTo(Login::class);
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
