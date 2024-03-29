<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferenceSetting extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'nameEn', 'nameDe', 'nameEs', 'defaultValue'];

    public function category()
    {
        return $this->belongsTo(PreferenceCategory::class);
    }

    public function values()
    {
        return $this->hasMany(PreferencesValue::class);
    }
}
