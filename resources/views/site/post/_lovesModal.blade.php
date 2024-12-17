<div id="lovesModal" class="modal">
    <div class="modal-content">
        <span id="closeLovesModal" class="close-button">&times;</span>
        <h2>المعجبون ({{ $post->loves->count() }})</h2>
        <ul class="followers-list">
            @foreach ($post->loves as $love)
                <div class="follow-item">
                    <div class="user-info">
                        <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image"
                            class="user-image">
                        <div class="user-details">
                            <p class="username">{{ $love->user->name }}</p>
                            <p class="num-followers">15 متابع</p>
                        </div>
                    </div>
                    <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>
                        متابعة </button>
                </div>
            @endforeach
        </ul>
    </div>
</div>
