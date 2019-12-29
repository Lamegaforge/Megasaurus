<?php

namespace App\Http\Transformers;

use App\Curator;
use League\Fractal\TransformerAbstract;

class CuratorTransformer extends TransformerAbstract
{
    public function transform(Curator $curator)
    {
        return $curator->toArray();
    }
}
