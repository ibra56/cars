<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairTask extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'task_description', 'due_date', 'priority', 'completion_status'];

    // Define relationships with other entities
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    // Add other relevant relationships here
}
