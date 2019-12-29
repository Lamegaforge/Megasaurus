<?php

namespace App;

use App\Curator;
use Illuminate\Database\Eloquent\Model;

class Clip extends Model
{
    protected $fillable = ['*'];

    public function curator()
    {
        return $this->belongsTo(Curator::class);
    }
}
