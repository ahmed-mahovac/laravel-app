<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['treatment_id', 'arch_id', 'device_id', 'package_id'];

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }

    public function arch()
    {
        return $this->belongsTo(ProductArch::class);
    }

    public function device()
    {
        return $this->belongsTo(ProductDevice::class);
    }

    public function package()
    {
        return $this->belongsTo(ProductPackage::class);
    }
}
