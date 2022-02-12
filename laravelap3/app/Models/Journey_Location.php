<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey_Location extends Model
{
    use HasFactory;
    protected $table='Journey_Location';
    protected $fillable = [
        'Journey_ID',
        'Location',
    ];
}
