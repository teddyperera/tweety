@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <div class="relative">    
            <img
                src="/images/cover_photo.jpg"
                alt=""
                class="mb-2"
            >

            <img
                style="left:50%; width:100px;"
                src="{{$user->avatar}}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            >
        </div>
        
        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px;">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a href="{{$user->path('edit')}}" class="text-xs mr-2 border border-gray-300 rounded-full py-1 px-2 text-black">
                        Edit Profile
                    </a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>        

        <p class="text-sm">
            Great news - your parcel has now been shipped!
            A little reminder - if you've bought several items, they may not all be dispatched together and you may receive multiple deliveries. Some of our sellers also do not provide tracking.
            Our carrier partners have advised that due to a high level of demand there will be delivery delays of an average 3 days. Learn more.
        </p>
    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])
@endsection