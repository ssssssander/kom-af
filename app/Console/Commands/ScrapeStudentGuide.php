<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScrapeStudentGuide extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:studentguide';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrapes data from the Guido student guide and inserts them in the database';

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

    }
}
