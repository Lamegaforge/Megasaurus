<?php

namespace App\Console\Commands;

use App\Clip;
use App\Services\ClipService;
use App\Repositories\Criterias;
use Illuminate\Console\Command;
use App\Repositories\ClipRepository;
use App\Managers\Twitch\TwitchManager;
use Illuminate\Database\Eloquent\Collection;

class ClipsViewsUpdater extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clips:views-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    protected $clipRepository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ClipRepository $clipRepository)
    {
        parent::__construct();

        $this->clipRepository = $clipRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $clips = $this->getAllClips();

        foreach ($clips as $clip) {

            $views = $this->getViews($clip);

            $this->update($clip, $views);
        }
    }

    protected function getAllClips() :Collection
    {
        $this->clipRepository->pushCriteria(new Criterias\Active());

        return $this->clipRepository->all();
    }

    protected function getViews(Clip $clip) :int
    {
        $clip = app(TwitchManager::class)->driver('api')->get($clip->slug);

        return $clip['views'];
    }

    protected function update(Clip $clip, int $views)
    {
        $this->clipRepository->update([
            'views' => $views,
        ], $clip->id);        
    }
}
