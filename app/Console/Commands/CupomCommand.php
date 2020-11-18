<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ServiceJob;

class CupomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cupom:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria Cupom';

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
        dispatch(new ServiceJob);
    }
}
