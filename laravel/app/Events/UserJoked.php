<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserJoked implements ShouldBroadcastNow
{
    use SerializesModels;
    use Dispatchable;
    use InteractsWithSockets;

    public $user;
    public $joke;

    public function __construct($user, $joke) {
        $this->user = $user;
        $this->joke = $joke;
    }

    public function broadcastWith() {
        return ['username' => $this->user->name, 'joke' => $this->joke];
    }

    public function broadcastOn() {
        return new Channel('jokes');
    }
}
