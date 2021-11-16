<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uni_tags extends Model
{
    use HasFactory;
    
    public function tags(){
        return $this->belongsTo('App\Models\tags');
    }

    public function universe(){
        return $this->belongsTo('App\Models\Universe');
    }
}
