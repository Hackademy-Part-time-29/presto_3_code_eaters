<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendNotification()
    {
        // Logica per inviare la notifica

        $message = 'Hello world!';

        event(new MyEvent($message));

        return "Notification sent: " . $message;
    }
}
