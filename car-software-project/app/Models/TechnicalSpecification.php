<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalSpecification extends Model
{
    use HasFactory;
    protected $fillable = ['car_make', 'car_model', 'car_year', 'engine_specifications', 'dimensions', 'weight'];

    // No relationships needed for this table.
}
