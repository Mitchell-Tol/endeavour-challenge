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
    protected $signature = 'endeavour:import-json {filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports JSON data into a database';

    /**
     * Execute the console command.
     */
    public function handle() {
        $path = $this->filenameToPath();
        $contents = file_get_contents($path);
        $data = json_decode($contents);
        # Keys: ["name","address","checked","description","interest","date_of_birth","email","account","credit_card"]
    }

    private function filenameToPath() {
        $pathTo = storage_path() . "/app/json/";
        $extension = ".json";
        $filename = $this->argument("filename");
        if (!str_contains($filename, $extension)) {
            $filename .= $extension;
        }
        return $pathTo . $filename;
    }
}
