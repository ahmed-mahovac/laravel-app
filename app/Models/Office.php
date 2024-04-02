<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address'];

    public function doctorOfficeRels()
    {
        return $this->hasMany(DoctorOfficeRel::class);
    }
}
