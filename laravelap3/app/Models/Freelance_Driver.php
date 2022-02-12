<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelance_Driver extends Model
{
    use HasFactory;
    protected $table='Freelance_Driver';
    protected $fillable = [
        'NIC',
    ];
}
