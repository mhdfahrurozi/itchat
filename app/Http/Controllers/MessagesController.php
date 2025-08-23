<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function index($id = null)
    {
        return view('Chatify::pages.app', [
            'id' => $id ?? 0,
            'type' => 'user', 
            'messengerColor' => Auth::user()->messenger_color ?? '#2180f3',
            'dark_mode' => Auth::user()->dark_mode < 1 ? 'light' : 'dark',
        ]);
    }
}
