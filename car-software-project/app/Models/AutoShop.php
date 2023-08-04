<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoShop extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'contact_details', 'ratings'];

    // Define relationships with other entities
    public function serviceAppointments()
    {
        return $this->hasMany(ServiceAppointment::class, 'auto_shop_id', 'id');
    }

    public function spareParts()
    {
        return $this->hasMany(SparePart::class, 'auto_shop_id', 'id');
    }

    // Add other relevant relationships heres
}
