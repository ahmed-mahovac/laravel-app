<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentHistory extends Model
{
    use HasFactory;

    protected $fillable = ['treatment_id'];

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }

    public function plannings()
    {
        return $this->hasMany(TreatmentPlanning::class);
    }

    public function comments()
    {
        return $this->hasMany(TreatmentComment::class);
    }
}
