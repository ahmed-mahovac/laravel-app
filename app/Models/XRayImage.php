<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XRayImage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'path', 'datetime', 'treatment_upload_id'];

    public function treatmentUpload()
    {
        return $this->belongsTo(TreatmentUpload::class);
    }
}
