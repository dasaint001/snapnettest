<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lga extends Model
{
    use HasFactory;
    
    public function state()
    {
    	return $this->belongsTo('App\States', 'state_id');
    }
}
