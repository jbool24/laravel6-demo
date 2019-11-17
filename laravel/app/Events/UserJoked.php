<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;


class UserJoked implements ShouldBroadcast
{
    public function broadcastOn() {
        return new Channel('jokes');
    }
}
