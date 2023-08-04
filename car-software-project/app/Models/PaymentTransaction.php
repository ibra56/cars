<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_id', 'transaction_amount', 'payment_method', 'timestamp', 'status'];

    // Define relationships with other entities
    public function car()
    {
        return $this->belongsTo(Car::class, 'transaction_id', 'unique_identifier');
    }

    // Add other relevant relationships here
}
