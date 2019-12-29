<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curator extends Model
{
    protected $fillable = ['*'];
    
    public function clips()
    {
        return $this->belongsToMany(Clip::class);
    } 
}
