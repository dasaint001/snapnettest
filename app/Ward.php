<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
    

class Ward extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function lga()
    {
    	return $this->belongsTo('App\Lga', 'lga_id');
    }
}


