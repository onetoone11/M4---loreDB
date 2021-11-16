<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    use HasFactory;

    public function uni_tags(){
        return $this->hasMany('App\Models\uni_tags');
    }

    public function uni_genres(){
        return $this->hasMany('App\Models\uni_genre');
    }

    public function stories(){
        return $this->hasMany('App\Models\story');
    }
}
