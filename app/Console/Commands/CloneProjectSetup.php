<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CloneProjectSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clone';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prepare project before run application.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $count = 3;
        $bar = $this->output->createProgressBar($count);

        $this->newLine(1);
        $bar->start();
        $this->newLine(1);

        /*
        - Step 1- Copy .env.sample .env
        */
        exec('cp .env.example .env', $output2);
        $this->newLine(1);
        $this->comment(implode(PHP_EOL, $output2));
        $bar->advance();
        $this->newLine(1);

        /*
        - Step 2 - Generate key
        */
        $this->call('key:generate');
        $bar->advance();
        $this->newLine(1);

        // Step 3 - Clear cache
        $this->call('optimize:clear');
        $this->call('config:clear');
        $bar->advance();
        $this->newLine(1);

        $bar->finish();
        $this->newLine(1);
        $this->info(" \n ✅ Prepare project before run application successfully 🎉🎉💥" . PHP_EOL);
        $this->info(" \n  ==> Please edit .env to connect database and run ``php artisan migrate:fresh --seed``" . PHP_EOL);
    }
}
