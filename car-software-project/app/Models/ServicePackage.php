<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    use HasFactory;

    protected $fillable = ['auto_shop_id', 'package_name', 'included_services', 'pricing', 'duration'];

    // Define relationships with other entities
    public function autoShop()
    {
        return $this->belongsTo(AutoShop::class, 'auto_shop_id', 'id');
    }

    // Add other relevant relationships here
}
