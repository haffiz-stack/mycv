<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class testlog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jomtest:jomtest2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'My First Command';

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
     * @return int
     */
    public function handle()
    {
        \Log::info('A user has arrived at the welcome page.');
        return 0;
    }
}
