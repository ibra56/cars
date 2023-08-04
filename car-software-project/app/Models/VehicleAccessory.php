<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleAccessory extends Model
{
    use HasFactory;
    protected $fillable = ['car_id', 'accessory_name', 'installation_date', 'cost'];

    // Define relationships with other entities
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    // Add other relevant relationships here
}
