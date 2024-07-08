<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\MyEvent;

class SendNotificationCommand extends Command
{
    protected $signature = 'notification:send';

    protected $description = 'Send notification';

    public function handle()
    {
        // Logica per inviare la notifica

        $message = 'Hello world!';

        event(new MyEvent($message));

        $this->info('Notification sent: ' . $message);
    }
}
