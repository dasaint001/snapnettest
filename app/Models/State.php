<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
    

class State extends Model
{
    use HasFactory;

    public function lga()
    {
    	return $this->hasMany('App\Lga');
    }
}

