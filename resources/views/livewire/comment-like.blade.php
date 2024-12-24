<div>
    <button class="like-button" wire:click="toggleLike">
        <i class="fa fa-heart {{ $isLiked ? 'liked' : '' }}"></i>
        {{ $loveCount }}
    </button>
</div>
