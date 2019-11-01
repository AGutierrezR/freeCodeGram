@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pd-5">
            <img src="https://instagram.fvlc1-2.fna.fbcdn.net/vp/535e8d194fdbfc357ad03257c95212a3/5E5AF927/t51.2885-19/s320x320/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.fvlc1-2.fna.fbcdn.net" class="rounded-circle" style="width: 100%; height: auto;">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
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
        <div class="col-4">
            <img src="https://instagram.fvlc1-2.fna.fbcdn.net/vp/38c7dda6cc4cef374102dacd01c3737f/5E444480/t51.2885-15/sh0.08/e35/c0.115.933.933a/s640x640/73319948_3118988548118480_2584593794372883946_n.jpg?_nc_ht=instagram.fvlc1-2.fna.fbcdn.net&_nc_cat=108" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.fvlc1-1.fna.fbcdn.net/vp/6e00685d4396b1b727742f94c6f6611c/5E5B7769/t51.2885-15/e35/c93.0.563.563a/73427310_857771071310415_1803775118571694506_n.jpg?_nc_ht=instagram.fvlc1-1.fna.fbcdn.net&_nc_cat=103" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.fvlc1-2.fna.fbcdn.net/vp/6bdec517f705832817a3fcd001b5191a/5E4C716E/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/75379747_1984863518283661_4296065131383461825_n.jpg?_nc_ht=instagram.fvlc1-2.fna.fbcdn.net&_nc_cat=101" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
