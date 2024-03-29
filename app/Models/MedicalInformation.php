<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalInformation extends Model
{
    use HasFactory;

    protected $fillable = ['area_id', 'areaComment', 'maloclusionsComment'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function malocclusionRels()
    {
        return $this->hasMany(InfoMalocclusionRel::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }
}
