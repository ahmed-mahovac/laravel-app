<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalPreferences extends Model
{
    use HasFactory;

    protected $fillable = ['iprActivated', 'iprStageFrom', 'iprMax', 'attachmentsActivated', 'attachmentsStageFrom', 'attachmentsRetentionsattachmentsOn', 'attachmentsAsLittleAsPossible', 'interproxDentalBuildUpAllowInterproxDentalBuildUp', 'stagingPlanningEqualStagesInUpperAndLowerJaw', 'dissolveCrowdedTeeth', 'correctionOfOcclusionCorrectClass', 'correctionOfOcclusionBeginFromStage', 'correctionOfOcclusionCanines', 'correctionOfOcclusionMolares', 'correctionOfOcclusionAllowMinipins', 'crossbiteCorrectionAllowRubberBan', 'notes', 'doctor_id'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }
}
