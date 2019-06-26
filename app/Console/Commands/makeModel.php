<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use ThirdParty\AutoMakeCode\AutoMakeCode;

class makeModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tcis:makeModel {name} {pk}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '生成model文件';

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
        //

        $make = new AutoMakeCode();

        $name = $this->argument('name');

        $pk = $this->argument('pk');

        $make->makeModel($name,$pk);
    }
}
