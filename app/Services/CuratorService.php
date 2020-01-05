<?php

namespace App\Services;

use App\Curator;
use App\Repositories\CuratorRepository;

class CuratorService
{
    protected $curatorRepository;

    public function __construct(CuratorRepository $curatorRepository)
    {
        $this->curatorRepository = $curatorRepository;
    }

    public function firstOrCreate($trackingId, array $attributes) :Curator
    {
        $curator = $this->curatorRepository->findByField('tracking_id', $trackingId);

        if ($curator->isEmpty()) {
            $curator = $this->curatorRepository->create($attributes);
        }

        return $curator->first();
    }
}
