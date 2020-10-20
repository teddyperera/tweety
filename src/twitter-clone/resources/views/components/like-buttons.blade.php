<div class="flex">
    <form method="POST" action="/tweets/{{$tweet->id}}/like">
        @csrf
        <div class="flex items-center mr-4">
            <img class="text-gray-500 mr-1 w-3" src="{{asset('images/icons/thumb-up.svg')}}" alt="">
            <button type="submit" class="text-xs text-gray-500">{{$tweet->likes ?: 0}}</button>
        </div>
    </form>    
    
    <form method="POST" action="/tweets/{{$tweet->id}}/like">
        @csrf
        @method('DELETE')
        <div class="flex items-center">
            <img class="text-gray-500 mr-1 mt-1 w-3" src="{{asset('images/icons/thumb-down.svg')}}" alt="">
            <button type="submit" class="text-xs mt-0 text-gray-500">{{$tweet->dislikes ?: 0}}</button>
        </div>
    </form>    
</div>