<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'endeavour:import-json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports JSON data into a database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $this->info("The command was successful");
    }
}
