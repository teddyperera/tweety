<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
<form method="POST" action="{{asset('/tweets')}}">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="What's up doc"
            required
            autofocus
            ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
            style="width:7%; border-radius: 70%;"
            src="{{current_user()->avatar}}"
            alt=""
            class="mr-2"
        >
        <button
            class="bg-blue-500 hover:bg-blue-600 rounded-lg text-sm shadow py-2 px-8 text-white"
            type="submit"
            >
                Publish
        </button>
    
        </footer>

        </form>

        @error('body')
            <p class="text-red-500 text-sm mt-2">
                {{$message}}
            </p>
        @enderror
</div>