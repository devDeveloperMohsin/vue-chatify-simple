<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
