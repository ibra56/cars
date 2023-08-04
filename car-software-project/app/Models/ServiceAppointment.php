<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceAppointment extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'auto_shop_id', 'appointment_date', 'appointment_time', 'requested_services', 'additional_notes'];

    // Define relationships with other entities
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    public function autoShop()
    {
        return $this->belongsTo(AutoShop::class, 'auto_shop_id', 'id');
    }

    // Add other relevant relationships here
}
