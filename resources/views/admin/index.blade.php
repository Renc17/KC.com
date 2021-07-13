@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1" style="background-color: #3c3f58">
                sldkgjlksnlksv
            </div>
            <div class="col-md-11">
                <div class="col-md-10 p-5 mb-5" style="background-color: #3c3f58; border-radius: 15px">
                    <div class="row justify-content-start">
                        <div class="col-md-3 p-3 mr-4 text-white d-flex border-right" >
                            <div class="p-2 text-center" style="font-size: xx-large"><i class="fas fa-users"></i></div>
                            <div class="ml-3 p-2" style="font-size: large">Registered <br> users</div>
                            <div class="ml-3 p-2" style="font-size: xx-large">{{ count($users) }}</div>
                        </div>
                        <div class="col-md-3 p-3 text-white d-flex border-right" >
                            <div class="p-2 text-center" style="font-size: xx-large"><i class="fas fa-upload"></i></div>
                            <div class="ml-3 p-2" style="font-size: large">Uploaded <br> posts</div>
                            <div class="ml-3 p-2" style="font-size: xx-large">{{ count($posts) }}</div>
                        </div>
                    </div>
                </div>
                <div class="row p-2 col-md-10 ">
                    @foreach($users as $user)
                        <div class="col-md-3 p-1">
                            <div class="card" style="background-color: #707793">
                                <img class="card-img-top p-1 ml-auto mr-auto mt-3" src="/storage/{{ $user->profile->image }}" alt="" style="background-color: #3c4044; width: 200px; height: 200px; border-radius: 50%; display: block;">
                                <div class="card-body justify-content-center d-flex flex-column">
                                    <h5 class="card-title text-center">{{ $user-> name }} {{ $user->surname }}</h5>
                                    <a href="#" class="mt-2 btn btn-primary bg-dark border-dark">View Profile</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @foreach($users as $user)
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

{{--style="background-color: #707793; border-radius: 15px"--}}
{{--storage/{{ $user->profile->image }}--}}
