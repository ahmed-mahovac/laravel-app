<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoMalocclusionRel extends Model
{
    use HasFactory;

    protected $fillable = ['malocclusion_id', 'medical_information_id', 'status'];

    public function malocclusion()
    {
        return $this->belongsTo(Malocclusion::class);
    }

    public function medicalInformation()
    {
        return $this->belongsTo(MedicalInformation::class);
    }
}
