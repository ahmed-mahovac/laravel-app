<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['patientId', 'firstname', 'lastname', 'birthday', 'gender', 'doctor_office_rel_id'];

    public function doctorOfficeRel()
    {
        return $this->belongsTo(DoctorOfficeRel::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }
}
