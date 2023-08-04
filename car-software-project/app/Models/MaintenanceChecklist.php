<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceChecklist extends Model
{
    use HasFactory;

    protected $fillable = ['task_description', 'completion_status'];

    // No relationships needed for this table.
}
