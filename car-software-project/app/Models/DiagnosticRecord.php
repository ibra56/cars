<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosticRecord extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'health_status', 'error_codes', 'sensor_readings', 'timestamp'];

    // Define relationships with other entities
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    // Add other relevant relationships here
}
