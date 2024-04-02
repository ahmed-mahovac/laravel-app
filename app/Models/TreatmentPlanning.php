<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentPlanning extends Model
{
    use HasFactory;

    protected $fillable = ['treatment_history_id', 'timestamp', 'link', 'Comment', 'StageplanImagePath', 'iprImagePath', 'movementsImagePath', 'version', 'trackingNumber', 'shipmentPlanning', 'shipmentAligner'];

    public function history()
    {
        return $this->belongsTo(TreatmentHistory::class, 'treatment_history_id');
    }
}
