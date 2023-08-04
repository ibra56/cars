<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackAndRating extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'auto_shop_id', 'rating', 'comment', 'timestamp'];

    // Define relationships with other entities
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function autoShop()
    {
        return $this->belongsTo(AutoShop::class, 'auto_shop_id', 'id');
    }

    // Add other relevant relationships here
}
