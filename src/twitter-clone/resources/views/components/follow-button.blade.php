@if(current_user()->isNot($user))
<form action="/profiles/{{ $user->username }}/follow" method="POST">
    @csrf
    <button
        type="submit"
        class="text-xs bg-blue-500 rounded-lg shadow py-1 px-2 text-white">
        {{ current_user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</form>
@endif