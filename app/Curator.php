<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curator extends Model
{
    protected $fillable = [
        'tracking_id',
        'name',
        'display_name',
        'channel_url',
        'logo',
    ];
    
    public function clips()
    {
        return $this->belongsToMany(Clip::class);
    } 
}
