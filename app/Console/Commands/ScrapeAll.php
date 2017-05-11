<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScrapeAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs scrape:articles and scrape:courses';

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
        $this->call('scrape:articles');
        $this->call('scrape:courses');
    }
}
