@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-start mt-3">
            <div class="dropdown col-md-12">
                <button class="btn btn-light border" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filtra
                    <i class="ml-2 fas fa-sliders-h"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <form action="/search" method="get">
                        <div class="m-auto row form-group">
                            <div class="col-md-12">
                                Cmimi
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="price_from" placeholder="Nga">
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="price_to" placeholder="Deri">
                            </div>
                        </div>
                        <div class="m-auto row form-group">
                            <div class="col-md-12 mt-2">
                                Numri i dhomave
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="rooms_from" placeholder="Nga">
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="rooms_to" placeholder="Deri">
                            </div>
                        </div>
                        <div class="m-auto row form-group">
                            <div class="col-md-12 mt-2">
                                Lloji i Qirase
                            </div>
                            <div class="col-md-5">
                                <select id="select-country" name="type">
                                    <option value="Qera"> Qera</option>
                                    <option value="Ndarje Qeraje"> Ndarje Qeraje</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 mt-3">
                            <button type="submit" value="Filter" name="submit" class="btn-dark border-dark">Kerko</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="row p-2">
            @foreach($posts as $post)
                <div class="col-md-4 p-1">
                    <div class="card">
                        <img class="card-img-top" src="/storage/{{ explode( ',', $post->image)[0] }}" alt="" style="background-color: #1b1e21; width: 100%; display: block; margin-left: auto; margin-right: auto">
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
                            <a href="/search/{{ $post->id }}" class="mt-4 ml-md-4 btn btn-primary bg-dark border-dark">Shiko Pronen</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-10 d-flex justify-content-center">
                {{ $posts->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
