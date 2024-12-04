<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    // Specify the table name if it's not the plural of the model name
    protected $table = 'orders'; // Adjust this if your table name is different
    
    // If the primary key is not 'id', specify it here (optional)
    protected $primaryKey = 'id'; // Default, so it's optional

    // If the model should not use timestamps (created_at, updated_at), set this to false
    public $timestamps = false;

    // Specify the fillable attributes (columns that can be mass-assigned)
    protected $fillable = ['item_name', 'price', 'quantity', 'created_at','slots','status'];

    // If the table has a 'created_at' column and you want to use it, let Laravel know
    protected $dates = ['created_at'];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'token', 'token'); // Foreign key is 'token' in orders table and 'token' in reservations table
    }
}