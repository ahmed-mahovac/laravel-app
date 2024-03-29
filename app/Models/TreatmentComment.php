<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'history_id',
        'isAdmin',
        'name',
        'timestamp',
        'text',
    ];

    public function history()
    {
        return $this->belongsTo(TreatmentHistory::class, 'treatment_history_id');
    }
}
