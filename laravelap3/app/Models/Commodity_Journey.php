<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commodity_Journey extends Model
{
    use HasFactory;
    protected $table='Commodity_Journey';
    protected $fillable = [
        'Journey_ID'
    ];
}
