<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['car_make', 'car_model', 'car_year', 'recommended_maintenance_tasks', 'intervals', 'mileage_thresholds'];

    // Define relationships with other entities
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_make', 'make')
            ->where('car_model', $this->car_model)
            ->where('year', $this->car_year);
    }

    // Add other relevant relationships here
}
