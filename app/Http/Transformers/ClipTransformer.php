<?php

namespace App\Http\Transformers;

use App\Clip;
use League\Fractal\TransformerAbstract;

class ClipTransformer extends TransformerAbstract
{
    public function transform(Clip $clip)
    {
        return $clip->toArray();
    }
}
