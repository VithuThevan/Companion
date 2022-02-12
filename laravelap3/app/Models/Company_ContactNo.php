<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_ContactNo extends Model
{
    use HasFactory;
    protected $table='Company_Contact_No';
    protected $fillable = [
        'Company_ID',
        'Contact_No'
    ];
}
