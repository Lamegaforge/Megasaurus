<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ApplicationReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'application:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset database application';

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
        $commands = [
            'migrate:reset',
            'migrate',
            'db:seed',
        ];

        $this->info('reset initialized');

        $this->perform($commands);

        $this->info(PHP_EOL . 'reset done');        
    }

    protected function perform(array $commands)
    {
        $bar = $this->output->createProgressBar(count($commands));

        $bar->start();

        foreach ($commands as $command) {

            $this->callSilent($command);

            $bar->advance();
        }

        $bar->finish();
    }
}
