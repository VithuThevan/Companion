<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;
    protected $table='Journey';
    protected $fillable = [
        'Journey_Id',
        'Pickup_Date',
        'Pickup_Time',
        'Pickup_Location',
        'Dropoff_Date',
        'Dropoff_Time',
        'Dropoff_Location',
        'Respond_Time',
        'Amount',
        'Payment_Mode',
        'Requested_Person',
        'Company_Id',
        'Driver_NIC',
    ];
}
