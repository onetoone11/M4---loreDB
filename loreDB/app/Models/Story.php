<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    public function story_tags(){
        return $this->hasMany('App\Models\story_tags');
    }
}
