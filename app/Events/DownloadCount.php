<?php

namespace App\Events;

use App\Models\Document;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DownloadCount
{
    use Dispatchable, SerializesModels;

    private $document;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    /**
     * Document
     *
     * @return \App\Models\Document $document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
