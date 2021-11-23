<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $table = 'stories';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function story_tags(){
        return $this->hasMany('App\Models\story_tags');
    }

    public function story_topic(){
        return $this->hasMany('App\Models\story_topic');
    }

    public function universe(){
        return $this->belongsTo('App\Models\Universe');
    }
}
