<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationPreference extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'notification_type', 'preference'];

    // Define relationships with other entities
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Add other relevant relationships here
}
