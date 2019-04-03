<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessagesController extends Controller
{
    // Get admin hompage which shows all messages in the database
    public function index()
    {
        // Get all messages
        $messages = Message::all();

        // Send to index page
        return view('messages/index', ['messages' => $messages]);
    }

	// Store created message into the database
    public function store()
    {
        // Validate input and save message
        Message::create(request()->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'min:12', 'max:255'],
            'message' => ['required', 'min:10', 'max:255']
        ]));

    	// Send to thanks (for message) page
    	return view('messages/thanks');
    }

    // Delete a specific message from the database
    public function destroy(Message $message)
    {
        // Delete message
        $message->delete();

        // Return to admin page (message index)
        return redirect('/admin');
    }
}
