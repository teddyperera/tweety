<x-app>
    <form method="POST" enctype="multipart/form-data" action="{{$user->path('edit')}}">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('name') }}</label>

                <input id="name" type="text" class="border border-grey-400 p-2 w-full" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Userame') }}</label>

                <input id="username" type="text" class="border border-grey-400 p-2 w-full" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="mb-6">
            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('avatar') }}</label>
            
            <div class="flex">
                <input id="avatar" type="file" class="border border-grey-400 p-2 w-full" name="avatar" value="{{ $user->avatar }}" autocomplete="avatar" autofocus>

                <img src="{{$user->avatar}}" alt="" width="70px">                
            </div>
            @error('avatar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('email') }}</label>

                <input id="email" type="email" class="border border-grey-400 p-2 w-full" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('password') }}</label>

                <input required id="password" type="password" class="border border-grey-400 p-2 w-full" name="password" value="" required autocomplete="password" autofocus>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('password_confirmation') }}</label>

                <input required id="password_confirmation" type="password" class="border border-grey-400 p-2 w-full" name="password_confirmation" value="" required autocomplete="password_confirmation" autofocus>

                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="mb-6 mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="px-6 py-4 rounded text-sm uppercase bg-blue-600 text-white">
                    {{ __('Update Details') }}
                </button>

                <a class="ml-4 hover:text-blue-400" href="{{$user->path()}}">Cancel</a>
            </div>
        </div>
    </form>
</x-app>