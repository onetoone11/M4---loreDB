<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class story_topic extends Model
{
    use HasFactory;

    public function topic(){
        return $this->belongsTo('App\Models\topic');
    }

    public function story(){
        return $this->belongsTo('App\Models\Story');
    }
}
