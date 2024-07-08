<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class ChatController extends Controller
{
    public function index()
    {
        return view('livechat.livechat');
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');

        // Invia l'evento a Pusher
        $pusher = new Pusher(
            config('broadcasting.connections.pusher.key'),
            config('broadcasting.connections.pusher.secret'),
            config('broadcasting.connections.pusher.app_id'),
            [
                'cluster' => config('broadcasting.connections.pusher.options.cluster'),
                'useTLS' => true,
            ]
        );

        $data['message'] = $message;
        $pusher->trigger('my-channel', 'my-event', $data);

        return response()->json(['status' => 'Message sent']);
    }
}
