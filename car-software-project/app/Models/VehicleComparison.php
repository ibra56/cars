<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleComparison extends Model
{
    use HasFactory;

    protected $table = 'vehicle_comparison';
    protected $fillable = ['car_model_1', 'car_model_2', 'comparison_attributes'];

    // Define relationships with other entities
    public function carModel1()
    {
        return $this->belongsTo(Car::class, 'car_model_1', 'id');
    }

    public function carModel2()
    {
        return $this->belongsTo(Car::class, 'car_model_2', 'id');
    }

    // Add other relevant relationships here
}
