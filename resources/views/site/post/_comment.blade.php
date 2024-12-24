{{-- التعليق واستدعاء الردود عليه --}}
<div class="comment">

    @include('site.post._dropdown', ['reply' => $comment])

    <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar">
    <div class="comment-content">
        <div class="author-details">
            <span class="author-name">{{ $comment->user->name }}</span>
            <small class="post-time">{{ $comment->created_at ? $comment->created_at->diffForHumans() : '' }}</small>
        </div>
        <p class="comment-text">{{ $comment->content }}</p>
        <div class="comment-actions">

            {{-- @livewire('comment-like', ['comment' => $comment]) --}}

            <button class="reply-button" onclick="toggleReplyForm({{ $comment->id }})">
                <i class="fa fa-reply"></i> رد
            </button>
            @php
                $repliesCount = $comment->children->count();
            @endphp
            @if ($repliesCount > 0)
                <button class="toggle-replies-button" onclick="toggleReplies(this)" data-replies-count="{{ $repliesCount }}">
                    عرض الردود ({{ $repliesCount }})
                </button>
            @endif
        </div>

        @include('site.post._replyForm', ['reply' => $comment])

        <!-- قسم الردود -->
        <div class="replies" style="display: none;">
            @foreach ($comment->children as $reply)
                @include('site.post._reply', ['reply' => $reply])
            @endforeach
        </div>

    </div>
</div>
