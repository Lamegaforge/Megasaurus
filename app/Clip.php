<?php

namespace App;

use App\Curator;
use Illuminate\Database\Eloquent\Model;

class Clip extends Model
{
    protected $fillable = [
        'slug',
        'tracking_id',
        'title',
        'url',
        'game',
        'curator_id',
    ];

    public function curator()
    {
        return $this->belongsTo(Curator::class);
    }
}
