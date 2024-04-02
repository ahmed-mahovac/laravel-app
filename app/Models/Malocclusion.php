<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malocclusion extends Model
{
    use HasFactory;

    protected $fillable = ['orderNo', 'textEn', 'textDe', 'textEs', 'allowBest', 'package_id'];

    public function package()
    {
        return $this->belongsTo(ProductPackage::class);
    }

    public function medicalInformationRels()
    {
        return $this->hasMany(InfoMalocclusionRel::class);
    }
}
