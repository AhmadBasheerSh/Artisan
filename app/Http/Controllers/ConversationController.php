<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

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


            if (!$open_chat) {
                $open_chat = new Conversation();
                $open_chat->id = 0;
                $user_receiver = User::where('id',  $id_receiver)->first();
                $users = [
                    auth()->user(),
                    $user_receiver,
                ];
                $message = null;
                $open_chat->type = 'individual';
                $open_chat->users = collect($users);
                $open_chat->messages = collect($message);
            }
        }

        // إعادة جميع المحادثات والمحادثة الخاصة بالمستقبل (إن وجدت)
        return view('conversations.index', compact('conversations', 'open_chat'));
    }


//     public function show(Request $request)
//     {
//         $conversation_id = $request->conversation_id;
//         $request->validate([
//             'message' => 'required|string|max:1000|required_without_all:files',
//             'files.*' => 'nullable|file|mimes:jpeg,png,gif,pdf,doc,docx,mp4,mkv,avi,webm|max:51200',
//         ]);

//         if ($request->resever_id) {

//             $open_chat = Conversation::create([
//                 'type' => 'individual',
//             ]);

//             $open_chat->users()->attach([auth()->id(), $request->resever_id]);
//             $conversation_id = $open_chat->id;
//         }

//         $messageText = $request->message ?? '';
//         $message = Message::create([
//             'message' => $messageText,
//             'conversation_id' => $conversation_id,
//             'sender_id' => auth()->id(),
//         ]);

//         if ($request->hasFile('files')) {
//             $files = [];
//             foreach ($request->file('files') as $file) {
//                 $destinationPath = public_path('uploads/messages');
//                 if (!file_exists($destinationPath)) {
//                     mkdir($destinationPath, 0755, true);
//                 }

//                 $filename = uniqid() . '_' . $file->getClientOriginalName();
//                 $file->move($destinationPath, $filename);

//                 $files[] = [
//                     'message_id' => $message->id,
//                     'file_path' => 'uploads/messages/' . $filename,
//                     'file_type' => $file->getClientMimeType(),
//                 ];
//             }

//             foreach ($files as $fileData) {
//                 $message->files()->create($fileData);
//             }
//         }

//         // return redirect()->route('conversations.index');
//         return redirect()->route('conversations.show', ['conversation' => $request->conversation_id])
//             ->with('success', 'Message sent successfully');
//     }

public function show(Request $request)
{
    // استلام الـ conversation_id من الطلب
    $conversation_id = $request->conversation_id;

    // التحقق من صحة البيانات المرسلة
    $validated = $request->validate([
        'message' => 'required|string|max:1000|required_without_all:files',
        'files.*' => 'nullable|file|mimes:jpeg,png,gif,pdf,doc,docx,mp4,mkv,avi,webm|max:51200',
    ]);

    // إنشاء محادثة جديدة إذا لم يتم تحديد conversation_id و resever_id موجود
    if ($request->resever_id) {
        $open_chat = Conversation::create([
            'type' => 'individual',
        ]);

        // ربط المحادثة بالمستخدمين
        $open_chat->users()->attach([auth()->id(), $request->resever_id]);
        $conversation_id = $open_chat->id;  // تعيين الـ conversation_id للمحادثة الجديدة
    }

    // إرسال الرسالة النصية
    $messageText = $request->message ?? '';
    $message = Message::create([
        'message' => $messageText,
        'conversation_id' => $conversation_id,
        'sender_id' => auth()->id(),
    ]);

    // التعامل مع رفع الملفات
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $destinationPath = public_path('uploads/messages');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // إنشاء اسم فريد لكل ملف
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

            // حفظ معلومات الملف في قاعدة البيانات
            $message->files()->create([
                'file_path' => 'uploads/messages/' . $filename,
                'file_type' => $file->getClientMimeType(),
            ]);
        }
    }

    // إعادة التوجيه إلى المحادثة مع رسالة نجاح
    return redirect()->route('conversations.show', ['open_chat' => $conversation_id]);
}

}
