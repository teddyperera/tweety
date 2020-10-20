<div class="bg-gray-200 border border-gray-300 lounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse (auth()->user()->follows as $user)
            <li class="{{$loop->last ? '' : 'mb-4'}}">
                    <a class="flex items-center text-sm" href="{{ route('profile', $user) }}">
                        <img
                            style="width:15%; border-radius: 70%;"
                            src="{{$user->avatar}}"
                            alt=""
                            class="mr-2"
                        >
                        {{$user->name}}
                    </a>
            </li>
        @empty
        <li>No friends yet</li>
        @endforelse    
    </ul>
</div>