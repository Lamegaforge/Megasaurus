<?php

namespace App\Repositories;

use App\Game;
use Prettus\Repository\Eloquent\BaseRepository;

class GameRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Game::class;
    }
}
