<?php

namespace App\Services;

use App\Clip;
use App\Curator;
use App\Repositories\ClipRepository;

class ClipService
{
    protected $clipRepository;

    public function __construct(ClipRepository $clipRepository)
    {
        $this->clipRepository = $clipRepository;
    }

    public function alreadySave(string $trackingId) :bool
    {
        $clip = $this->clipRepository->findByField('tracking_id', $trackingId);

        return ! $clip->isEmpty();
    }

    public function store(array $attributes, Curator $curator) :Clip
    {
        $attributes['curator_id'] = $curator->id;

        $clip = $this->clipRepository->create($attributes);

        return $clip;
    }

    public function updateViews(Clip $clip, int $views)
    {
        $this->clipRepository->update([
            'views' => $views,
        ], $clip->id);
    }
}
