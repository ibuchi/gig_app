<?php

namespace App\Listeners;

use App\Events\GigCreated;
use App\Models\User;
use App\Notifications\NewGig;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendGigCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(GigCreated $event): void
    {
        foreach (User::whereNot('id', $event->gig->user_id)->cursor() as $user) {
            $user->notify(new NewGig($event->gig));
        }
    }
}
