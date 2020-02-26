<?php

namespace App\Http\Transformers;

use App\Game;
use League\Fractal\TransformerAbstract;

class GameTransformer extends TransformerAbstract
{
    public function transform(Game $game)
    {
        return $game->toArray();
    }
}
