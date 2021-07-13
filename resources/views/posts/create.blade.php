@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/p" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form--title">Përshkrimi i Pronës </h4>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pb-3 pt-3">
                                <div class="form-group">
                                    <label for="property-title">Vendosni një Titull*</label>
                                    <input id="property-title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pb-3">
                                <div class="form-group">
                                    <label for="property-description">Vendosni Përshkrimin e Pronës*</label>
                                    <textarea id="property-description" rows="2" type="text" class="form-control @error('description') is-invalid @enderror" name="description" autocomplete="description" autofocus></textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-type">Ofrohet për:</label>
                                    <div class="select&#45;&#45;box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-type">
                                            <option>Qera</option>
                                            <option>Ndarje Qeraje</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Bedrooms">Dhoma</label>
                                    <input id="Bedrooms" type="text" class="form-control @error('bedrooms') is-invalid @enderror" name="bedrooms" value="{{ old('bedrooms') }}" autocomplete="bedrooms" autofocus>

                                    @error('bedrooms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Bathrooms">Numri i Tualeteve</label>
                                    <input id="Bathrooms" type="text" class="form-control @error('baths') is-invalid @enderror" name="baths" value="{{ old('baths') }}" autocomplete="baths" autofocus>

                                    @error('baths')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Floors">Numri i Kateve</label>
                                    <input id="Floors" type="text" class="form-control @error('floors') is-invalid @enderror" name="floors" value="{{ old('floors') }}" autocomplete="floors" autofocus>

                                    @error('floors')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Garages">Numri i Garazheve</label>
                                    <input id="Garages" type="text" class="form-control @error('parking') is-invalid @enderror" name="parking" value="{{ old('parking') }}" autocomplete="parking" autofocus>

                                    @error('parking')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Size">Siperfaqja</label>
                                    <input id="Size" type="text" class="form-control @error('sqrm') is-invalid @enderror" name="sqrm" value="{{ old('sqrm') }}" placeholder="m2" autocomplete="sqrm" autofocus>

                                    @error('sqrm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Sale-Rent-Price">Çmimi*</label>
                                    <input id="Sale-Rent-Price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" autocomplete="price" autofocus>

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="After-Price-Label">Çmimi i Plotë</label>
                                    <input id="After-Price-Label" type="text" class="form-control @error('full_price') is-invalid @enderror" name="full_price" value="{{ old('full_price') }}" placeholder="p.sh. 1200 me faturën e ujit të përfshirë" autocomplete="full_price" autofocus>

                                    @error('full_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <h4 class="form&#45;&#45;title">Të dhënat e Pronës:</h4>
                            </div>

                            <div class="form-check w-100 d-flex">
                                <div class="col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <input class="form-check-input" type="checkbox" name="utilities[]" value="1"> Ngrohje Qëndrore
                                        </label>
                                    </div>

                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <input class="form-check-input" type="checkbox" name="utilities[]" value="2"> Ballkonë
                                        </label>
                                    </div>

                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <input class="form-check-input" type="checkbox" name="utilities[]" value="3"> Lejohen Kafshët
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <input class="form-check-input" type="checkbox" name="utilities[]" value="4"> Alarm Zjarri
                                        </label>
                                    </div>

                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <input class="form-check-input" type="checkbox" name="utilities[]" value="5"> Kuzhinë e Ndarë
                                        </label>
                                    </div>

                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <input class="form-check-input" type="checkbox" name="utilities[]" value="6"> Lavatriçe
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <input class="form-check-input" type="checkbox" name="utilities[]" value="7"> Ashensorë
                                        </label>
                                    </div>

                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <input class="form-check-input" type="checkbox" name="utilities[]" value="8"> Larës Pjatash
                                        </label>
                                    </div>

                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <input class="form-check-input" type="checkbox" name="utilities[]" value="9"> Dalje Emergjencce
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-box">
                        <div class="row mt-3">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form&#45;&#45;title">Adresa e Pronës</h4>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="road">Rruga</label>
                                    <input id="road" type="text" class="form-control @error('road') is-invalid @enderror" name="road" value="{{ old('road') }}" autocomplete="road" autofocus>

                                    @error('road')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="no">Numri i Nderteses</label>
                                    <input id="no" type="text" class="form-control @error('no') is-invalid @enderror" name="no" value="{{ old('no') }}" autocomplete="no" autofocus>

                                    @error('no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Zona</label>
                                    <div class="select&#45;&#45;box">
                                        <select id="select-country" name="city">
                                            <option value="Varri i Bamit"> Varri i Bamit</option>
                                            <option value="Tirana e Re"> Tirana e Re</option>
                                            <option value="Kombinati"> Kombinati</option>
                                            <option value="Lapraka"> Lapraka</option>
                                            <option value="Bathorja"> Bathorja</option>
                                            <option value="Zogu i Zi"> Zogu i Zi</option>
                                            <option value="21 dhjetori"> 21 dhjetori</option>
                                            <option value="Selita"> Selita</option>
                                            <option value="Porcelani"> Porcelani</option>
                                            <option value="Xhamlliku"> Xhamlliku</option>
                                            <option value="Oxhaku"> Oxhaku</option>
                                            <option value="Bregu i Lumit"> Bregu i Lumit</option>
                                            <option value="Ali Demi"> Ali Demi</option>
                                            <option value="Brraka"> Brraka</option>
                                            <option value="Selvia (Lagje)"> Selvia (Lagje)</option>
                                            <option value="Shkoze"> Shkoze</option>
                                            <option value="Kinostudio"> Kinostudio</option>
                                            <option value="Fresku"> Fresku</option>
                                            <option value="Shallvaret"> Shallvaret</option>
                                            <option value="Shkolla Bashkuar"> Shkolla Bashkuar</option>
                                            <option value="Poligrafik"> Poligrafik</option>
                                            <option value="Brryli"> Brryli</option>
                                            <option value="Medreseja"> Medreseja</option>
                                            <option value="Unaza e Re"> Unaza e Re</option>
                                            <option value="Vizioni"> Vizioni</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="Zip/Postal-code">Kodi Postar</label>
                                    <input id="Zip/Postal-code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" autocomplete="postal_code" autofocus>

                                    @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="neighborhood">Adresa Shtesë</label>
                                    <input id="neighborhood" type="text" class="form-control @error('relative_address') is-invalid @enderror" name="relative_address" placeholder="p.sh. Afër Pallatit me Shigjeta" value="{{ old('relative_address') }}" autocomplete="relative_address" autofocus>

                                    @error('relative_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-box w-100">
                                <div class="row p-1">
                                    <div class="col-xs-10 col-sm-10 col-md-10 pt-3">
                                        <h4 class="form--title">Property Gallery</h4>
                                    </div>

                                    <div class="col-xs-10 col-sm-4 col-md-10 p-2">
                                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image[]" multiple>

                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-auto">
                    <button type="submit" value="Save Edits" name="submit" class="btn btn-primary bg-dark border-dark ml-3">Shto Pronen</button>
                    <div class="p-2">
                        <a class="ml-2 text-dark" href="/profile/{{ Auth::user()->id }}">Shko Pas</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
