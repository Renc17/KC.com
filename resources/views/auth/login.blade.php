@extends('layouts.blank')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-between align-items-center mt-5">
        <div class="col-md-6" style="overflow: hidden;">
            <img src="/Images/signin-image.png" alt="image" style="max-height: 400px">
        </div>
        <div class="col-md-6">
            <h2 class="form-title text-center p-4"><strong>Hyr</strong></h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row ml-md-5 m-1 mb-3" style="border-bottom: 1px solid #999">
                    <label for="email" class="col-1 col-form-label text-md-right"><i class="fas fa-envelope"></i></label>

                    <div class="col-8">
                        <input style="border: none;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row ml-md-5 m-1 mb-3" style="border-bottom: 1px solid #999">
                    <label for="password" class="col-1 col-form-label text-md-right"><i class="fas fa-lock"></i></label>

                    <div class="col-8">
                        <input style="border: none;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Fjalekalimi" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-2">
                        <button type="submit" class="btn btn-primary bg-dark border-dark">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-black-50" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <a class="text-center mt-3 text-black-50" href="{{ url('/') }}">Shko pas</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
