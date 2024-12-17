{{-- اضافة وتعديل تعليق --}}
<form action="{{ isset($editComment) ? route('comment.update', $comment->id) : route('comment.store') }}"
    method="post">
    @csrf
    @if (isset($editComment))
        @method('PUT')
    @endif
    <div class="add-comment-section">
        <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar">
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <input name="comment" type="text" class="comment-input emojionearea"
            value="{{ old('comment', isset($editComment) ? $editComment->content : '') }}"
            placeholder="اكتب تعليق...">
        <button type="submit" class="send-comment-button">
            <i class="fa fa-paper-plane"></i>
        </button>
    </div>
</form>
