<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentForm extends Component
{
    public $post; // المنشور الحالي
    public $commentContent; // محتوى التعليق الجديد أو المعدل

    public function addComment() {
        // إضافة تعليق جديد
        Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $this->post->id,
            'content' => $this->commentContent,
        ]);
        $this->commentContent = '';
        $this->emit('commentAdded');
    }

    // public $comments = [];
    // public $editCommentId = null; // ID التعليق الذي يتم تعديله

    // public function mount($post)
    // {
    //     $this->post = $post;
    //     $this->loadComments();
    // }

    // public function loadComments()
    // {
    //     $this->comments = $this->post->comments;
    // }

    // public function addComment()
    // {

    //     if ($this->editCommentId) {
    //         // تعديل التعليق
    //         $comment = Comment::findOrFail($this->editCommentId);
    //         if ($comment) {
    //             $comment->update([
    //                 'content' => $this->commentContent,
    //             ]);
    //         }
    //         $this->editCommentId = null; // إعادة ضبط حالة التعديل
    //     } else {
    //         // إضافة تعليق جديد
    //         Comment::create([
    //             'user_id' => auth()->id(),
    //             'post_id' => $this->post->id,
    //             'content' => $this->commentContent,
    //         ]);
    //     }

    //     $this->commentContent = ''; // تفريغ الحقل
    //     $this->emit('commentUpdated'); // حدث لتحديث التعليقات
    //     $this->loadComments();
    // }

    // public function editComment($commentId)
    // {
    //     $comment = $this->post->comments()->find($commentId);
    //     if ($comment) {
    //         $this->editCommentId = $comment->id;
    //         $this->commentContent = $comment->content;

    //         $this->dispatchBrowserEvent('focusInput'); // حدث JavaScript لتركيز الحقل
    //     }
    // }

    public function render()
    {
        return view('livewire.comment-form');
    }
}
