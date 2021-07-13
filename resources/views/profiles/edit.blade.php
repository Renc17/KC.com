@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-box">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="/storage/{{ $user->profile->image }}" alt="" style="background-color: #5f5f5f; border-radius: 50%; height: 200px; width: 200px; display: block; margin-left: auto; margin-right: auto">
                        </div>
                        <div class="col-xs-5 col-sm-4 col-md-5 p-2 m-auto ">
                            <label for="image">Vendos foto profili</label>
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <div class="row m-auto">
                            <div class="col-xs-5 col-sm-5 col-md-5 pb-3 pt-3">
                                <div class="form-group">
                                    <label for="cel">Numer Kontakti</label>
                                    <input id="cel" type="text" class="form-control @error('cel') is-invalid @enderror" name="cel" value="{{ old('cel') ?? $user->profile->cel }}" autocomplete="cel" autofocus>

                                    @error('cel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-5 col-sm-5 col-md-5 pb-3 pt-3">
                                <div class="form-group">
                                    <label for="hours">Oret qe Deshironi te Kontaktoheni</label>
                                    <input id="hours" type="text" class="form-control @error('call_hours') is-invalid @enderror" name="call_hours" placeholder="p.sh. 10am-5pm" value="{{ old('call_hours') ?? $user->profile->call_hours }}" autocomplete="call_hours" autofocus>

                                    @error('call_hours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row m-auto">
                            <button type="submit" value="Save Edits" name="submit" class="btn btn-primary bg-dark border-dark m-auto">Rruaj Ndryshimet</button>
                            <div class="p-2 m-auto">
                                <a class="ml-2 text-dark" href="/profile/{{ $user->id }}">Shko Pas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form method="post" action="/profile/{{ $user->id }}" class="col-md-12 mt-3">
            @csrf
            @method('DELETE')
            <div class="col-xs-10 col-sm-10 col-md-5 m-auto">
                <button type="submit" value="delete_account" name="submit" class="btn btn-danger bg-light border-danger text-danger w-100">DELETE ACCOUNT</button>
            </div>
        </form>
    </div>
@endsection
