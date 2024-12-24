<div class="like-button">
    <i class="fa fa-heart  {{ $isLiked ? 'liked' : '' }}" wire:click="toggleLove"></i> <!-- أيقونة القلب -->
    <span id="lovesCount" class="like-count">{{ $loveCount }}</span>
</div>

