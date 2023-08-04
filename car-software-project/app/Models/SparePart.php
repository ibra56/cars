<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    use HasFactory;

    protected $fillable = ['part_name', 'description', 'compatibility_information', 'price'];

    // Define relationships with other entities
    public function autoShop()
    {
        return $this->belongsTo(AutoShop::class, 'auto_shop_id', 'id');
    }

    // Add other relevant relationships here

}
