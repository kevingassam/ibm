@extends('front.fixe')
@section('titre', $appartement->reference)
@section('body')


    <div class="breadcumb-wrapper " data-bg-src="{{ Storage::url($projet->photo) }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $appartement->reference }}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li>{{ $appartement->reference }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <div class="card p-3">
                        <h6>
                            Demande : {{ $appartement->reference }}
                        </h6>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="nom">Nom * </label>
                                    <input type="text" class="form-control" placeholder="John du pont" id="nom" required name="nom" value="{{ old('nom') }}">
                                    @error('nom')
                                        <span class="small text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="prenom">Prénom  </label>
                                    <input type="text" class="form-control" placeholder="John du pont" id="prenom" required name="prenom" value="{{ old('prenom') }}">
                                    @error('prenom')
                                        <span class="small text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="email">Email * </label>
                                    <input type="tel" class="form-control" placeholder="John_du_pont@gmail.com" required id="email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="small text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="telephone">Téléphone * </label>
                                    <input type="tel" class="form-control" placeholder="John du pont" required id="telephone" name="telephone" value="{{ old('telephone') }}">
                                    @error('telephone')
                                        <span class="small text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="message">Message  </label>
                                    <textarea name="message" id="messag" rows="3">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="small text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            @if ($parkings)
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        label{
            margin-bottom: 0px !important;
        }
    </style>
@endsection
