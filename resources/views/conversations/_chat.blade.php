@php
    $messages = $conversation->messages;
    $id_sender = 0;
@endphp
<div class="coversation-divider"><span>Today</span></div>
@foreach ($messages as $message)
    {{-- @if ($message->sender_id == auth()->id()) --}}
        <li class="conversation-item @if ($message->sender_id == auth()->id()) me @endif ">
            {{-- @if ($id_sender == $message->sender_id) --}}
            <div class="conversation-item-side">
                <img class="conversation-item-image"
                    src="{{$message->sender->image}}"
                    alt="">
            </div>
            {{-- @endif --}}
            <div class="conversation-item-content">
                <div class="conversation-item-wrapper">
                    <div class="conversation-item-box">
                        <div class="conversation-item-text">
                            <p>{{ $message->message}}</p>
                            <div class="conversation-item-time">{{ $message->created_at->format('h:i')}}</div>
                        </div>
                        <div class="conversation-item-dropdown">
                            <button type="button" class="conversation-item-dropdown-toggle"><i
                                    class="ri-more-2-line"></i></button>
                            <ul class="conversation-item-dropdown-list">
                                <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a></li>
                                <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="conversation-item-wrapper">
                    <div class="conversation-item-box">
                        <div class="conversation-item-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, tenetur!</p>
                            <div class="conversation-item-time">12:30</div>
                        </div>
                        <div class="conversation-item-dropdown">
                            <button type="button" class="conversation-item-dropdown-toggle"><i
                                    class="ri-more-2-line"></i></button>
                            <ul class="conversation-item-dropdown-list">
                                <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a></li>
                                <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </li>
        @php $id_sender = $message->sender_id; @endphp
    {{-- @endif --}}
@endforeach
