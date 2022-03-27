<?php

namespace App\Listeners;

use App\Events\DownloadCount;

class IncrementCount
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\DownloadCount  $event
     * @return void
     */
    public function handle(DownloadCount $event)
    {
        $document = $event->getDocument();
        $document->download_count += 1;
        $document->last_download = now();
        $document->save();
    }
}
