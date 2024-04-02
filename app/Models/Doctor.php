<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'titlePrefixed',
        'firstname',
        'lastname',
        'titleSuffixed',
        'login_id',
        'vendor_id',
        'clientNr',
        'prefixNo',
        'patientCounter',
        'country_id',
        'medical_preferences_id'
    ];

    public function login()
    {
        return $this->belongsTo(Login::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function medicalPreferences()
    {
        return $this->belongsTo(MedicalPreferences::class);
    }

    public function doctorOfficeRels()
    {
        return $this->hasMany(DoctorOfficeRel::class);
    }
}
