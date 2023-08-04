<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosticTroubleCode extends Model
{
    use HasFactory;
    protected $fillable = ['dtc_code', 'meaning', 'severity', 'recommended_actions'];

    // No relationships needed for this table.
}
