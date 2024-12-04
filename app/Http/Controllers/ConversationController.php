<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    public function index(Request $request)
    {
        $conversations = auth()->user()->conversations;

        // التحقق إذا كان هناك معرف مستقبل
        $id_receiver = $request->has('receiver_id') ? base64_decode($request->receiver_id) : null;
        $open_chat = null;

        // إذا كان هناك مستقبل محدد
        if ($id_receiver) {
            // البحث عن المحادثة بين المستخدم الحالي والمستقبل
            $open_chat = auth()->user()->conversations()
                ->whereHas('users', function ($query) use ($id_receiver) {
                    $query->where('users.id', $id_receiver);
                })
                ->where('type', 'individual')
                ->first();

            // إذا لم توجد محادثة، قم بإنشائها
            // if (!$open_chat) {
            //     $open_chat = Conversation::create([
            //         'type' => 'individual',
            //     ]);

            //     // ربط المستخدمين بالمحادثة
            //     $open_chat->users()->attach([auth()->id(), $id_receiver]);
            // }
        }

        // إعادة جميع المحادثات والمحادثة الخاصة بالمستقبل (إن وجدت)
        return view('conversations.index', compact('conversations', 'open_chat'));
    }

    public function show(Request $request)
    {

        $request->validate([
            'message' => 'required|string|max:1000',
            'conversation_id' => 'required|exists:conversations,id',
        ]);

        Message::create([
            'message' => $request->message,
            'conversation_id' => $request->conversation_id,
            'sender_id' => auth()->id(),
        ]);

        return redirect()->route('conversations.index');
    }
}
