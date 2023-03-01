<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lga extends Model
{
    use HasFactory;
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    

    public function state()
    {
    	return $this->belongsTo('App\States', 'state_id');
    }
}
