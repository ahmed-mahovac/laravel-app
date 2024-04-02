<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalPreferences extends Model
{
    use HasFactory;

    protected $fillable = ['doctor_id', 'isDefault'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
