<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferencesValue extends Model
{
    use HasFactory;

    protected $fillable = ['setting_id', 'value'];

    public function setting()
    {
        return $this->belongsTo(PreferenceSetting::class);
    }
}
