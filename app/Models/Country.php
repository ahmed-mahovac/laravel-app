<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['nameEn', 'nameDe', 'nameEs', 'callingCode'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
