@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="text-black-50 p-1" href="/search/{{ $post->id }}"><i class="fas fa-angle-left p-1"></i>Shko pas</a>
        <div class="row mt-3">
            @foreach(explode( ',', $post->image) as $image)
                <div class="col-md-4">
                    <img class="mb-2" src="/storage/{{ $image }}" alt="profile_pic" style="width: 100%;">
                </div>
            @endforeach
        </div>
    </div>
@endsection
