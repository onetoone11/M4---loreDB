<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;

    public function uni_genres(){
        return $this->hasMany('App\Models\uni_genre');
    }
}
