<?php

namespace Hall\Http\Controllers;

use Hall\Events\MessageSent;
use Hall\Message;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chat');
    }

    public function fetchMessages()
    {
//       $test= Message::with('user')->orderBy('created_at','desc')->limit(5)->get();
//       var_dump($test);
//       die();
        return Message::with('user')->orderBy('id','desc')->limit(5)->get();
    }

    public function sendMessage(Request $request)
    {
        $message = auth()->user()->messages()->create([
            'message' => $request->message,
            'receiver'  => $request->receiver
        ]);

		broadcast(new MessageSent(auth()->user(), $message))->toOthers();

        //return ['status' => 'Message Sent!'];
        return response()->json('Message Sent!',201);
    }
    public function getContent(Request $request)
    {
        $message = auth()->user()->messages()->where('id',$request->id)->get();

        //broadcast(new MessageSent(auth()->user(), $message))->toOthers();

        //return ['message' => $message];
        return response()->json($message,201);
    }
    public function getState(Request $request)
    {
        $message = auth()->user()->messages()->where('id',$request->id)->get();

       // broadcast(new MessageSent(auth()->user(), $message))->toOthers();

        //return ['state' => $message->state];
        return response()->json($message->state,201);
    }
    public function counter()
    {
        $total = auth()->user()->messages()->count();
        $sent = auth()->user()->messages()->where('status',200)->count();
        $remaining=$total-$sent;
        // broadcast(new MessageSent(auth()->user(), $message))->toOthers();

        return response()->json($remaining,201);
       // return ['remaining' => $remaining];
    }
}
