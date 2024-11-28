<form method="post" action="{{ route('conversations.show') }}">
    @csrf
    <div class="conversation-form">
        <button type="button" class="conversation-form-button"><i class="fas fa-image"></i></button>
        <div class="conversation-form-group">
            <textarea name="message" id="message" class="conversation-form-input" rows="1" placeholder="Type here..."  ></textarea>
            <input type="hidden" name="conversation_id" value="{{ $conversation_id }}">
            <button type="button" class="conversation-form-record"><i class="ri-mic-line"></i></button>
        </div>
        <button type="submit" class="conversation-form-button conversation-form-submit"><i
                class="ri-send-plane-2-line"></i></button>
    </div>
</form>
