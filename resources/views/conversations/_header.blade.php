<button type="button" class="conversation-back"><i class="ri-arrow-left-line"></i></button>
<div class="conversation-user">
    <img class="conversation-user-image"
        src="@if ($conversation->type == 'individual') @foreach ($conversation->users->where('id', '!=', auth()->id()) as $user)
                {{ $user->image }}
            @endforeach
            @else
                {{ $conversation->group->image }} @endif"
        alt="">
    <div>
        <div class="conversation-user-name">
            @if ($conversation->type == 'individual')
            @foreach ($conversation->users->where('id', '!=', auth()->id()) as $user)
                {{ $user->name }}
            @endforeach
            @else
                {{ $conversation->group->name }}
            @endif</div>
        <div class="conversation-user-status online">online</div>
    </div>
</div>
<div class="conversation-buttons">
    <button type="button"><i class="ri-phone-fill"></i></button>
    <button type="button"><i class="ri-vidicon-line"></i></button>
    <button type="button"><i class="ri-information-line"></i></button>
</div>
