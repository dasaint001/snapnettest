<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    public function state()
    {
    	return $this->belongsTo('App\States', 'state_id');
    }
}
