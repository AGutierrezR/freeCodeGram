@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pd-5">
            <img src="https://instagram.fvlc1-2.fna.fbcdn.net/vp/535e8d194fdbfc357ad03257c95212a3/5E5AF927/t51.2885-19/s320x320/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.fvlc1-2.fna.fbcdn.net" class="rounded-circle" style="width: 100%; height: auto;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-4">

        @foreach ($user->posts as $post)
        <div class="col-4">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="">
        </div>
        @endforeach

        
    </div>
</div>
@endsection
