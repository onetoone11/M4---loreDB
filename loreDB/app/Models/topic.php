<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    use HasFactory;

    public function story_topic(){
        return $this->hasMany('App\Models\story_topic');
    }
}
