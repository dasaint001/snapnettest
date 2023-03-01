<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
    

class Ward extends Model
{
    use HasFactory;

    public function lga()
    {
    	return $this->belongsTo('App\Lga', 'lga_id');
    }
}


