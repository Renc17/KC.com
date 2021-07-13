@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-between">
        <div class="col-md-3">
            <img src="/storage/{{ $user->profile->image }}" alt="" style="background-color: #5f5f5f; border-radius: 50%; height: 200px; width: 200px; display: block; margin-left: auto; margin-right: auto">
        </div>
        <div class="col-md-9 text-center mt-4">
            <div class="row ">
                <div class="col-md-10">
                    <h2><strong>{{ $user->name }} {{ $user->surname }}</strong></h2>
                    <p>{{ $user->profile->cel }}</p>
                    <a href="/profile/{{ $user->id }}/edit" class="text-center d-block m-auto p-1" style="width: 250px; border: 1px solid #999; color: black; text-decoration: none">Edit</a>
                </div>
                <div class="col-md-2 mt-2">
                    <div class="m-auto" style="border: 2px solid black; border-radius: 50%; height: 34px; width: 31px; ">
                        <a href="/p/create"><i class="fas fa-plus p-2 text-black-50"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-5 p-5">
        @foreach($user->posts as $post)
        <div class="col-md-4 p-1">
            <div class="card">
                <img class="card-img-top" src="/storage/{{ explode(',', $post->image)[0] }}" alt="profile_pic" style="background-color: #1b1e21; width: 100%; display: block; margin-left: auto; margin-right: auto">
                <div class="card-body">
                    <h5 class="card-title pl-1">{{ $post->title }}</h5>
                    <div class="row m-auto">
                        <div class="card-text p-1">{{ $post->road }}</div>
                        <div class="card-text p-1">{{ $post->no }}</div>
                        <div class="card-text p-1">{{ $post->city }}</div>
                        <div class="card-text p-1">{{ $post->postal_code }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4 text-black-50">{{ $post->baths }} Banjo</div>
                        <div class="col-md-4 text-black-50">{{ $post->bedrooms }} Dhoma</div>
                        <div class="col-md-4 text-black-50">{{ $post->sqrm }} m2</div>
                    </div>
                    <p class="float-left mt-4 mr-4 pt-2"><strong>Cmimi {{ $post->price }}</strong></p>
                    <a href="/p/{{ $post->id }}/edit" class="mt-4 ml-md-4 btn btn-primary bg-dark border-dark">Edit Pronen</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
