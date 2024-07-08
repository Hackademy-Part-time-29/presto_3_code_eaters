<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('livechat.livechat');
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        event(new MyEvent($message));
        return response()->json(['message' => $message]);
    }
}
