{{-- اضافة رد لتعليق او رد --}}
<div id="reply-form-{{ $reply->id }}" class="reply-form" style="display: none; margin-top: 10px;">
    <form action="{{ route('comment.createReply') }}" method="POST">
        @csrf
        <div class="add-reply-section">
            <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar">
            <input type="hidden" name="comment_id" value="{{ $reply->id }}">
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <input name="comment" type="text" class="comment-input emojionearea"
                placeholder=" رد على{{ $comment->user->name }} ...">
            <button type="submit" class="send-comment-button">
                <i class="fa fa-paper-plane"></i>
            </button>
        </div>
    </form>
</div>
