<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentUpload extends Model
{
    use HasFactory;

    protected $fillable = ['treatment_id', 'type'];

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }

    public function facialImages()
    {
        return $this->hasMany(FacialImage::class);
    }

    public function detailedImages()
    {
        return $this->hasMany(DetailedImage::class);
    }

    public function xRayImages()
    {
        return $this->hasMany(XRayImage::class);
    }

    public function scan3Ds()
    {
        return $this->hasMany(Scan3d::class);
    }
}
