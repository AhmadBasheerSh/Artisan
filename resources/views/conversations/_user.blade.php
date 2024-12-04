<li>
    <a href="#" data-conversation="#conversation-{{$conversation->id}}">
        <img class="content-message-image"
            src="@if ($conversation->type == 'individual') @foreach ($conversation->users->where('id', '!=', auth()->id()) as $user)
                        {{ $user->image }}
                    @endforeach
                @else
                    {{ $conversation->group->image }} @endif"
            alt="">
        <span class="content-message-info">
            <span class="content-message-name">
                @if ($conversation->type == 'individual')
                    @foreach ($conversation->users->where('id', '!=', auth()->id()) as $user)
                        {{ $user->name }}
                    @endforeach
                @else
                    {{ $conversation->group->name }}
                @endif
            </span>
            <span class="content-message-text">
                @php
                    $lastMessage = $conversation->messages()->latest()->first();
                @endphp
                @if($lastMessage)
                    {{ $lastMessage->message}}
                @endif
            </span>
        </span>
        <span class="content-message-more">
            <span class="content-message-unread">5</span>
            <span class="content-message-time">
                @if($lastMessage)
                {{ $lastMessage->created_at->format('h:i') }}
                @endif</span>
        </span>
    </a>
</li>
