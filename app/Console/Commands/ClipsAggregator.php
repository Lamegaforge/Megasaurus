<?php

namespace App\Console\Commands;

use App\Services\ClipService;
use App\Services\TwitchService;
use Illuminate\Console\Command;
use App\Services\CuratorService;
use App\Managers\Twitch\TwitchManager;

class ClipsAggregator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clips:aggregate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $clips = app(TwitchManager::class)->driver('api')->getLastClips();

        foreach ($clips as $clip) {

            if (app(ClipService::class)->alreadySave($clip['tracking_id'])) {
                continue;
            }

            $curator = app(CuratorService::class)->firstOrCreate($clip['curator']['tracking_id'], $clip['curator']);

            app(ClipService::class)->store($clip, $curator);
        }
    }
}
