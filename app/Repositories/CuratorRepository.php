<?php

namespace App\Repositories;

use App\Curator;
use Prettus\Repository\Eloquent\BaseRepository;

class CuratorRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Curator::class;
    }
}
