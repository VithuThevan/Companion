<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $table='Vehicle';
    protected $fillable = [
        'Type_ID',
        'Year_Of_Make',
        'Model',
        'Engine_Capacity',
        'Odometer',
        "Seating_Capacity"
    ];
}
