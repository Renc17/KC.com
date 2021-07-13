@extends('layouts.blank')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-between align-items-center mt-5">
        <div class="col-md-6" style="overflow: hidden;">
            <img src="/Images/signup-image.png" alt="image" style="max-height: 400px">
        </div>
        <div class="col-md-6">
            <h2 class="form-title text-center p-4"><strong>Rregjistrohu</strong></h2>
            <form action="{{ route('register') }}" method="POST" class="register-form" id="register-form">
                @csrf
                <div class="form-group row ml-md-5 m-1 mb-3" style="border-bottom: 1px solid #999">
                    <label for="name" class="col-1 col-form-label text-md-right"><i class="fas fa-user"></i></label>

                    <div class="col-6">
                        <input style="border: none;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Emri" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row ml-md-5 m-1 mb-3" style="border-bottom: 1px solid #999">
                    <label for="name" class="col-1 col-form-label text-md-right"><i class="fas fa-user"></i></label>

                    <div class="col-6">
                        <input style="border: none;" id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" placeholder="Mbiemri" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row ml-md-5 m-1 mb-3" style="border-bottom: 1px solid #999">
                    <label for="email" class="col-1 col-form-label text-md-right"><i class="fas fa-envelope"></i></label>

                    <div class="col-6">
                        <input style="border: none;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row ml-md-5 m-1 mb-3" style="border-bottom: 1px solid #999">
                    <label for="password" class="col-1 col-form-label text-md-right"><i class="fas fa-lock"></i></label>

                    <div class="col-6">
                        <input style="border: none;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Fjalekalimi" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row ml-md-5 m-1 mb-3" style="border-bottom: 1px solid #999">
                    <label for="password-confirm" class="col-1 col-form-label text-md-right"><i class="fas fa-lock"></i></label>

                    <div class="col-10">
                        <input style="border: none;" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmo Fjalekalimin" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-3">
                        <button type="submit" class="btn btn-primary bg-dark border-dark">
                            {{ __('Regjistrohu') }}
                        </button>
                        <a href="login" class="text-start m-3 text-black-50">Kam Llogari</a>
                        <a class="text-center mt-3 text-black-50" href="{{ url('/') }}">Shko pas</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
