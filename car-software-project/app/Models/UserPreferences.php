<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPreferences extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'notification_preferences', 'preferred_auto_shops', 'default_language', 'theme'];

    // Define relationships with other entities
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Add other relevant relationships here

}
