<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    public function index(){
        // $conversations = auth()->user()->conversations;
        dd(Auth::user());
        $conversations = Conversation::all();
        return view('conversations.index', compact('conversations'));
    }

    public function show($id){
        $conversation = Conversation::with('messages')->findOrFail($id);

        // إذا كان الطلب AJAX، قم بإرجاع الرسائل فقط
        if (request()->ajax()) {
            return response()->json([
                'messages' => $conversation->messages,
            ]);
        }

        return view('conversations.index', compact('conversation'));
    }


}
