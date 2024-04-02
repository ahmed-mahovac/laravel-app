<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferenceCategory extends Model
{
    use HasFactory;

    protected $fillable = ['nameEn', 'nameDe', 'nameEs'];

    public function settings()
    {
        return $this->hasMany(PreferenceSetting::class);
    }
}
