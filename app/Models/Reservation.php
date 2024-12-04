<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = ['slots', 'token'];

    public function orders()
    {
        return $this->hasMany(Orders::class, 'token', 'token'); // Foreign key is 'token' in orders table and 'token' in reservations table
    }
}
