{{-- صاحب المنشور وعنوان ومحتوى المنشور والتفاعلات مع المنشور --}}
<div class="post-details">
    <div class="author-info">
        <div class="author-info">
            <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="Author">
            <div class="author-details">
                <span class="author-name">{{ $post->user->name }}</span>
                <small class="post-time">{{ $post->created_at ? $post->created_at->diffForHumans() : '' }}</small>
            </div>
        </div>
        @if (auth()->user()->id != $post->user->id && !auth()->user()->follows()->where('follow_id', $post->user->id)->exists())
            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i> متابعة </button>
        @endif
    </div>
    <h2>{{ $post->title }}</h2>
    <p class="post-description">{{ $post->content }}</p>
    <div class="post-actions">
        <form id="postLoveForm" method="post" action="{{ !$post->loves->contains('user_id', auth()->id()) ? route('postAction.addLove') : route('postAction.deleteLove') }}">
            @csrf
            <div class="like-button">
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <i class="fa fa-heart {{ $post->loves->contains('user_id', auth()->id()) ? 'liked' : '' }}"
                    onclick="toggleLove('postLoveForm')"></i> <!-- أيقونة القلب -->
                <span id="lovesCount" class="like-count">{{ $post->loves->count() }}</span>
                <!-- loves Modal -->
                @include('site.post._lovesModal')
            </div>
        </form>
        <button class="action-btn save-btn">
            <i class="fa fa-bookmark"></i>
        </button>
        <button class="action-btn share-btn">
            <i class="fa fa-share"></i>
        </button>
    </div>
</div>
