<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Citizen extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}