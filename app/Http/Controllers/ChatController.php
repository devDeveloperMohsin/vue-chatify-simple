<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\ChatResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\RecipientsResource;

class ChatController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    // Chat App View
    public function chatApp(){
        return view('chat');
    }
    // End Chat App View

    // Fetch Recipients
    public function fetchRecipients(){
        if(Auth::user()->isDistributor()){
            $recipients = Auth::user()->userRetailers;
        }
        else{
            $recipients = Auth::user()->userDistributors;
        }

        return RecipientsResource::collection($recipients);
    }
    // End Fetch Recipients

    // Fetch Recipient
    public function fetchRecipient(Request $request){
        $request->validate([
            'recipient' => ['required','integer','min:1'],
        ]);
        
        $user = User::findOrFail($request->recipient);

        return new RecipientsResource($user);
    }
    // End Fetch Recipient

    // Fetch Messages
    public function fetchMessages(Request $request){
        $validData = $request->validate([
            'recipient' => ['required','integer','min:1'],
        ]);
        $chatMembers = [Auth::id(), $request->recipient];

        $messages = Chat::whereIn('to_user', $chatMembers)->whereIn('from_user',$chatMembers)->get();
        return ChatResource::collection($messages);
    }
    // End Fetch Messages

    // Fetch Attachmentents
    // End Fetch Attachmentents

    // Save Message
    public function saveMessage(Request $request){
        $validData = $request->validate([
            'to_user' => ['required','integer','min:0','max:999999'],
            'message' => ['nullable', 'string','min:1','max:5000'],
            'attachment' => ['nullable','file','max:10240'],
        ]);

        $validData['from_user'] = Auth::id();
        if($request->hasFile('attachment')){
            $validData['attachment'] = $request->attachment->store('chat-attachments');
        }

        $message = Chat::create($validData);
        return response()->json([
            'response' => 'success',
            'message' => new ChatResource($message),
        ]);
    }
    // End Save Message
}
