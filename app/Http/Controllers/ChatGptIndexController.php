<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class ChatGptIndexController extends Controller
{
    

    public function __invoke(String $id = null) : Response
    {
        return Inertia::render('Chat/ChatIndex' , [
            'chat' => fn () => $id ? Chat::findOrFail($id) : null,
            'messages' => Chat::latest()->where('user_id' , Auth::id())->get()
        ]);
    }
}
