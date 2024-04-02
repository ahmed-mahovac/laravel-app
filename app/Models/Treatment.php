<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'treatmentNumber',
        'status',
        'product_id',
        'patient_id',
        'medical_information_id',
        'timestamp',
        'history_id',
        'parent_treatment_id',
        'doctor_office_rel_id',
        'offerPath',
        'billPath',
        'treatmentPlanPath',
        'treatmentType',
        'expirationDate',
        'medical_preferences_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function medicalInformation()
    {
        return $this->belongsTo(MedicalInformation::class);
    }

    public function history()
    {
        return $this->belongsTo(TreatmentHistory::class);
    }

    public function parentTreatment()
    {
        return $this->belongsTo(Treatment::class, 'parent_treatment_id');
    }

    public function doctorOfficeRel()
    {
        return $this->belongsTo(DoctorOfficeRel::class);
    }

    public function medicalPreferences()
    {
        return $this->belongsTo(MedicalPreferences::class);
    }

    public function upload()
    {
        return $this->hasOne(TreatmentUpload::class);
    }
}
