<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead_Passenger extends Model
{
    use HasFactory;
    protected $table='Lead_Passenger';
    protected $fillable = [
        'Journey_ID',
        'Name',
        'Contact_No',
        'Company_ID',
    ];
}
