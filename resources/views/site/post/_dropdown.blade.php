{{-- edite and delete dropdown  --}}
@if ($reply->user->id == auth()->id())
    <div class="dropdown">
        <i class="fa fa-ellipsis-h" onclick="toggleDropdown(this)"></i>
        <div class="dropdown-menu">
            <a class="dropdown-link" href="{{ route('comment.edit', $reply->id) }}">تعديل</a>
            <form method="post" action="{{ route('comment.destroy', $reply->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">حذف</button>
            </form>
        </div>
    </div>
@endif
