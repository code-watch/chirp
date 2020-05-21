<?php

namespace App\Console\Commands;

use App\User;
use App\Jobs\FetchMutedUsers;
use Illuminate\Console\Command;

class FetchMutedCommand extends Command
{
    protected $signature = 'fetch:muted';

    protected $description = 'Fetch muted users';

    public function handle() : void
    {
        // Let's use a Lazy Collection to stay memory efficient.
        // https://laravel.com/docs/collections#lazy-collections
        User::cursor()->each(function (User $user) {
            FetchMutedUsers::dispatch($user);
        });
    }
}
