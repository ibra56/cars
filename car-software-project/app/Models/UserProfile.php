<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'contact_details', 'vehicle_preferences', 'drivers_license_information'];

    // Define relationships with other entities
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Add other relevant relationships here
}
