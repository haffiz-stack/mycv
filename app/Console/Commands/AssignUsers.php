<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AssignUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:assign';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test log lagi';

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
        \Log::info('A user has arrived at the welcome page test schedule.');
        return 0;
    }
}
