{{-- الردود على التعليقات وردودهم --}}
<div class="reply">

    @include('site.post._dropdown')

    <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar">
    <div class="comment-content">
        <div class="author-details">
            <span class="re-author-name">{{ $reply->user->name }}</span>
            <small class="post-time">{{ $reply->created_at ? $reply->created_at->diffForHumans() : '' }}</small>
        </div>
        <p class="reply-text">{{ $reply->content }}</p>
        <div class="comment-actions">
            <form id="replyLoveForm" method="post"
                action="{{ !$reply->commentLoves->contains('user_id', auth()->id()) ? route('comment.addLove') : route('comment.deleteLove') }}">
                @csrf
                <input type="hidden" name="comment_id" value="{{ $reply->id }}">
                <button class="like-button">
                    <i class="fa fa-heart {{ $reply->commentLoves->contains('user_id', auth()->id()) ? 'liked' : '' }}"
                        onclick="toggleLove('replyLoveForm')"></i>
                    {{ $reply->commentLoves->count() }}
                </button>
            </form>
            <button class="reply-button" onclick="toggleReplyForm({{ $reply->id }})">
                <i class="fa fa-reply"></i> رد
            </button>
        </div>
        @include('site.post._replyForm')
    </div>
</div>

{{-- recurstion  --}}
@if ($reply->children->isNotEmpty())
    @foreach ($reply->children as $child)
        @include('site.post._reply', ['reply' => $child])
    @endforeach
@endif
