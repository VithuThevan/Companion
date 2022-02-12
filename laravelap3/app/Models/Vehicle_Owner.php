<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_Owner extends Model
{
    protected $table='Vehicle_Owner';
    protected $fillable = [
        'NIC',
    ];
}
