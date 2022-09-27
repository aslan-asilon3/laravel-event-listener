<?php

namespace App\Listeners;

use App\Events\errorLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class errorLogListener
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
     * @param  \App\Events\errorLog  $event
     * @return void
     */
    public function handle(errorLog $event)
    {
        Log::info($event->message);
    }
}
