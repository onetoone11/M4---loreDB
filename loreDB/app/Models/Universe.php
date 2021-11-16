<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    use HasFactory;

    public function story_tags(){
        return $this->hasMany('App\Models\uni_tags');
    }
}
