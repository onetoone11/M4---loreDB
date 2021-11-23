<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uni_genre extends Model
{
    use HasFactory;

    public function uni(){
        return $this->belongsTo('App\Models\Universe');
    }

    public function genres(){
        return $this->belongsTo('App\Models\genre');
    }
}
