<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-4 bg-gray-200 border border-greay-300 rounded-lg">
        <div class="col-md-8">
            <div class="card">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                    <form method="POST"
                        action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label
                                for="email"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                {{ __('E-Mail') }}
                            </label>

                            <input
                            id="email"
                            type="email"
                            class="border border-gray-400 p-2 w-full
                            @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email" 
                            autofocus
                            >

                            @error('email')
                                <span class="text-red-500 text-xs mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="password"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                {{ __('Password') }}
                            </label>

                            <input
                            id="password"
                            type="password"
                            class="border border-gray-400 p-2 w-full
                            @error('password') is-invalid @enderror"
                            name="password"
                            value="{{ old('password') }}"
                            required
                            autocomplete="current-password" 
                            autofocus
                            >

                            @error('password')
                                <span class="text-red-500 text-xs mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <input
                            id="remember"
                            type="checkbox"
                            class="mr-1"
                            name="remember"
                            {{ old('remember') ? 'checked' : ''}}
                            >
                            <label
                                for="password"
                                class="text-xs text-gray-700 font-bold uppercase">
                                {{ __('Remember me') }}
                            </label>                            
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-blue-400 rounded py-2 px-4 hover:bg-blue-500 text-white mr-2"
                                type="submit"
                                >
                                    Login
                            </button>

                            <a href="{{route('password.request')}}" class="text-xs text-gray-700">Forgot Your Password</a>
                        </div>
                    </form>

            </div>
        </div>
    </div>
</div>
</x-master>
