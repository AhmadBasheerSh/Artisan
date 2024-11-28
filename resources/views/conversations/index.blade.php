<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('conversationassets/tailwindcss-colors.css') }}">
    <link rel="stylesheet" href="{{ asset('conversationassets/style.css') }}">
    <title>Chat</title>
</head>

<body>
    <section class="chat-section">
        <div class="chat-container">
            <aside class="chat-sidebar">
                <a href="#" class="chat-sidebar-logo">
                    <i class="ri-chat-1-fill"></i>
                </a>
                <ul class="chat-sidebar-menu">
                    <li class="active"><a href="#" data-title="Chats"><i class="ri-chat-3-line"></i></a></li>
                    <li><a href="#" data-title="Contacts"><i class="ri-contacts-line"></i></a></li>
                    <li><a href="#" data-title="Documents"><i class="ri-folder-line"></i></a></li>
                    <li><a href="#" data-title="Settings"><i class="ri-settings-line"></i></a></li>
                    <li class="chat-sidebar-profile">
                        <button type="button" class="chat-sidebar-profile-toggle">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </button>
                        <ul class="chat-sidebar-profile-dropdown">
                            <li><a href="#"><i class="ri-user-line"></i> Profile</a></li>
                            <li><a href="#"><i class="ri-logout-box-line"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="chat-content">
                <div class="content-sidebar">
                    <div class="content-sidebar-title">Chats</div>
                    <form action="" class="content-sidebar-form">
                        <input type="search" class="content-sidebar-input" placeholder="Search...">
                        <button type="submit" class="content-sidebar-submit"><i class="ri-search-line"></i></button>
                    </form>
                    <div class="content-messages">
                        <ul class="content-messages-list">
                            <li class="content-message-title"><span>Recently</span></li>
                            @foreach ($conversations as $conversation)
                                @include('conversations._user', ['conversation' => $conversation])
                            @endforeach
                        </ul>
                    </div>
                </div>
                @if (!$open_chat)
                    <div class="conversation conversation-default active">
                    <i class="ri-chat-3-line"></i>
                    <p>Select chat and view conversation!</p>
                    </div>
                @else
                    <div class="conversation active" id="conversation-{{$open_chat}}">
                        {{-- @foreach ($conversations as $conversation) --}}
                            {{-- @if ($conversation->users->contains('id', $id_receiver) && $conversation->type === 'individual') --}}
                            <div class="conversation-top">
                                @include('conversations._header', ['conversation' => $open_chat])
                            </div>
                            <div class="conversation-main">
                                <ul class="conversation-wrapper">
                                    @include('conversations._chat')
                                </ul>
                            </div>
                            @include('conversations._message', ['conversation_id' => $open_chat->id])
                            {{-- @endif --}}
                        {{-- @endforeach --}}
                    </div>

                @endif

                @foreach ($conversations as $conversation)
                    <div class="conversation" id="conversation-{{$conversation->id}}">
                    <div class="conversation-top">
                        @include('conversations._header', ['conversation' => $conversation])
                    </div>
                    <div class="conversation-main">
                        <ul class="conversation-wrapper">
                            @include('conversations._chat')
                        </ul>
                    </div>
                    @include('conversations._message', ['conversation_id' => $conversation->id])
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="{{ asset('conversationassets/script.js') }}"></script>
</body>

</html>
