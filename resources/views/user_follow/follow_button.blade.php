@if (Auth::id() != $user->id)
  @if (Auth::user()->is_following($user->id))
    {{-- アンフォローボタンのフォーム --}}
    <form method="POST" action="{{ route('user.follow', $user->id) }}">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-error btn-sm normal-case"
      onclick="return confirm('Unfollow id = {{ $user->id }} ?')">Unfollow</button>
    </form>
  @else
    {{-- フォローボタンのフォーム --}}
    <form method="POST" action="{{ route('user.follow', $user->id) }}">
      @csrf
      <button type="submit" class="btn btn-primary btn-sm normal-case">Follow</button>
    </form>
  @endif
@endif
