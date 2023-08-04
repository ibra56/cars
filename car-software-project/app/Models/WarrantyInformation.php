<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyInformation extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'warranty_duration', 'coverage_details', 'terms_and_conditions'];

    // Define relationships with other entities
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    // Add other relevant relationships heres
}
