<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
class AddUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:add-user {count=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create New User';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for($i=0;$i<$this->argument('count');$i++){
            User::factory()->create();
        }
        echo "New User Was Created Successfully  \n";
    }
}
