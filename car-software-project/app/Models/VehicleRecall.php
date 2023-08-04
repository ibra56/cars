<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleRecall extends Model
{
    use HasFactory;

    protected $fillable = ['recall_notice', 'affected_vehicle_models', 'recommended_actions'];

    // No relationships needed for this table.
}
