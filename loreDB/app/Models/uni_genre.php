<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uni_genre extends Model
{
    use HasFactory;

    public function genre(){
        return $this->belongsTo('App\Models\genre');
    }

    public function uni_genre(){
        return $this->belongsTo('App\Models\Universe');
    }
}
