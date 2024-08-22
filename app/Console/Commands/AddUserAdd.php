<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
class AddUserAdd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:count-user {--verified}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Count Users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if($this->option('verified')){
            echo User::where('email_verified_at','<>',null)->count();
        }else{
            echo  User::count() ;
            echo "\n" ;
        }
    }
}
