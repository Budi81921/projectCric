<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class LogoutUser extends Command
{
    protected $signature = 'user:logout {userId}';
    protected $description = 'Logout a user by invalidating their session';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $userId = $this->argument('userId');

        // Assuming you are using the database session driver
        DB::table('sessions')->where('id', $userId)->delete();

        $this->info("User with ID {$userId} has been logged out.");
    }
}
