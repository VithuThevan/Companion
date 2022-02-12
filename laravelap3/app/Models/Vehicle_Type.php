<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_Type extends Model
{
    protected $table='Vehicle Type';
    protected $fillable = [
        'Type_Id',
        'Year_of_Make',
        'Model',
        'Engine_Capacity',
        'Odometer',
        'Seating_Capacity',
    ];
}
