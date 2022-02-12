<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $table='Driver';
    protected $fillable = [
        'Driver_NIC',
        'First_Name',
        'Last_Name',
        'Address_No',
        'Address_Street',
        'Address_City',
    ];
}
