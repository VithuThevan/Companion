<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger_Journey extends Model
{
    use HasFactory;
    protected $table='Passenger_Journey';
    protected $fillable = [
        'Journey_ID',
        'Passenger_Type',
        'No_Of_Passengers',
        'Care_Needed/Not',
    ];
}
