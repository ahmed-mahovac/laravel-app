<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['textEn', 'textDe', 'textEs'];

    public function medicalInformations()
    {
        return $this->hasMany(MedicalInformation::class);
    }
}
