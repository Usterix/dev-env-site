<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class MakeDevSite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:devsite
    {--type=static : The type of dev site e.g. WordPress Drupal etc..}
    {--name : The name of the devsite}
    {--user : The username to use for DB and admin logins}
    {--pass : The password to use for DB and admin logins}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Dev Site';


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

        $options = $this->option();
        $this->info(var_dump($options));
    }
}
