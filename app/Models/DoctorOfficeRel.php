<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorOfficeRel extends Model
{
    use HasFactory;

    protected $fillable = ['office_id', 'doctor_id'];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }
}
