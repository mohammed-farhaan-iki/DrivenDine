<?php

// app/Models/Payment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $fillable = [
        'reservation_id', 'amount', 'status',
    ];

    // Relationship to Reservation
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
