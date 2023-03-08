<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    use HasFactory;
    protected $table = 'drivers';

    protected $fillable = [
        'ID_drivers',
        'first_name',
        'last_name',
        'address',
        'phone',
        'active'
    ];
}
