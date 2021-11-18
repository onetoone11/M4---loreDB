<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class story_type extends Model
{
    use HasFactory;
    
    public function type(){
        return $this->belongsTo('App\Models\type');
    }

    public function story(){
        return $this->belongsTo('App\Models\Story');
    }
}
