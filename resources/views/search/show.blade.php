@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h2>{{ $post->title }}</h2>
                <div class="row m-auto">
                    <div class="card-text pr-1 text-black-50">{{ $post->road }}</div>
                    <div class="card-text pr-1 text-black-50">{{ $post->no }}</div>
                    <div class="card-text pr-1 text-black-50">{{ $post->city }}</div>
                    <div class="card-text pr-1 text-black-50">, {{ $post->postal_code }}</div>
                </div>
                <div class="text-black-50">{{ $post->relative_address }}</div>
            </div>
        </div>

        <div class="row p-2 w-100">
            <img class="mb-2" src="/storage/{{ explode( ',', $post->image)[0] }}" alt="" style="width: 40%;">
            @if(count(explode( ',', $post->image)) > 1)
            <div style="position: relative; width: 20%; height: 20%">
                <img class="mb-2 m-auto" src="/storage/{{ explode( ',', $post->image)[1] }}" alt="" style="max-width: 100%; filter: blur(8px);">
                <a href="/search/{{ $post->id }}/images" style="position: absolute; top: 50%; left: 50%; font-size: x-large" class="text-white">+{{ count(explode( ',', $post->image))-1 }}</a>
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-7 border-bottom">
                <div class="row mt-5 mb-2">
                    <div class="p-1 text-black-50 ml-2"> {{ $post->bedrooms }} Dhoma</div>
                    <div class="p-1 text-black-50 ml-2"> {{ $post->baths }} Banja</div>
                    <div class="p-1 text-black-50 ml-2"> {{ $post->floors }} Kate</div>
                    <div class="p-1 text-black-50 ml-2"> {{ $post->parking }} Parking</div>
                    <div class="p-1 text-black-50 ml-2"> {{ $post->sqrm }} m2</div>
                </div>
            </div>

            <div class="col-md-7 mt-2 p-2 mb-5">
                {{ $post->description }}
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-8">
                <h2>Cmimi</h2>
                <div> {{ $post->price }} / Leke standart</div>
                <div> {{ $post->full_price }} / Leke plus shpenzime</div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-10">
                <h2>Cfare Ofron Shtepia</h2>
                <div class="row mt-2">
                    <div class="col-xs-12 col-sm-6 col-md-3 @if(!in_array(1, explode( ',', $post->utilities ))) text-black-50 @endif>">
                        <label><i class="fas fa-fire-alt mr-2"></i></label>
                        <span>Ngrohje</span>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 @if(!in_array(2, explode( ',', $post->utilities ))) text-black-50 @endif>">
                        <label><i class="fas fa-mountain mr-2"></i></label>
                        <span>Ballkonë</span>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 @if(!in_array(3, explode( ',', $post->utilities ))) text-black-50 @endif>">
                        <label><i class="fas fa-paw mr-2"></i></label>
                        <span>Lejohen Kafshët</span>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 @if(!in_array(4, explode( ',', $post->utilities ))) text-black-50 @endif>">
                        <label><i class="fas fa-fire-extinguisher mr-2"></i></label>
                        <span>Alarm Zjarri</span>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 @if(!in_array(5, explode( ',', $post->utilities ))) text-black-50 @endif>">
                        <label><i class="fas fa-mitten mr-2"></i></label>
                        <span>Kuzhinë e Ndarë</span>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 @if(!in_array(6, explode( ',', $post->utilities ))) text-black-50 @endif>">
                        <label><i class="fas fa-tshirt mr-2"></i></label>
                        <span>Lavatriçe</span>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 @if(!in_array(7, explode( ',', $post->utilities ))) text-black-50 @endif>">
                        <span>Ashensorë</span>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 @if(!in_array(8, explode( ',', $post->utilities ))) text-black-50 @endif>">
                        <span>Larës Pjatash</span>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 @if(!in_array(9, explode( ',', $post->utilities ))) text-black-50 @endif>">
                        <label><i class="fas fa-sign-out-alt mr-2"></i></label>
                        <span>Dalje Emergjencce</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-8">
                <h3>Te Dhena Kontakti</h3>

                <table class="table ">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pronari</th>
                        <th scope="col">Numer Kontakti</th>
                        <th scope="col">Oret e Kontaktit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $post->user->name }} {{ $post->user->surname }}</td>
                        <td>{{ $post->user->profile->cel ?? '-'}}</td>
                        <td>{{ $post->user->profile->call_hours ?? '-'}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 mt-3">
                <img class="" src="/storage/{{ $post->user->profile->image }}" alt="" style="background-color: #1b1e21; border-radius: 50%; width: 100px; height: 100px; display: block; margin-left: auto; margin-right: auto">
            </div>
        </div>


        <div id="map" style="height: 100px"></div>

    </div>
@endsection
