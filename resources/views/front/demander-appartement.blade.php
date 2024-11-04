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
                    <form action="{{ route('demande_post_to_api') }}" method="POST">
                        @csrf
                        <input type="hidden" name="appartement_id" value="{{ $appartement->id }}">
                        <div class="card p-3">
                            <h6>
                                Demande : {{ $appartement->reference }}
                            </h6>
                            <div>
                                <b>Prix : </b>
                                @if ($appartement->prix)
                                    {{ $appartement->prix }} DT
                                @else
                                    <span class="text-danger">
                                        Sur demande !
                                    </span>
                                @endif
                            </div>
                            <br>
                            @if (session('success'))
                                <br>
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <br>
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="text-danger small">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nom">Nom * </label>
                                        <input type="text" class="form-control" placeholder="John du pont" id="nom"
                                            required name="nom" value="{{ old('nom') }}">
                                        @error('nom')
                                            <span class="small text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="prenom">Prénom </label>
                                        <input type="text" class="form-control" placeholder="John du pont" id="prenom"
                                            required name="prenom" value="{{ old('prenom') }}">
                                        @error('prenom')
                                            <span class="small text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="email">Email * </label>
                                        <input type="tel" class="form-control" placeholder="John_du_pont@gmail.com"
                                            required id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="small text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="telephone">Téléphone * </label>
                                        <input type="tel" class="form-control" placeholder="John du pont" required
                                            id="telephone" name="telephone" value="{{ old('telephone') }}">
                                        @error('telephone')
                                            <span class="small text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label for="message">Message </label>
                                        <textarea name="message" id="message" rows="3">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="small text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                @if ($parkings->count() > 0)
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <h6>
                                                Parking
                                            </h6>
                                            <p class="small">
                                                Les parkings sont disponibles pour les appartements de cette référence.
                                                Vous pouvez télécharger les plans des parkings en cliquant sur le bouton
                                                ci-dessous.

                                            </p>
                                                <table class="cart_table">
                                                    <thead>
                                                        <tr>
                                                            <td class="text-white"></td>
                                                            <td class="text-white">Numéro </td>
                                                            <td class="text-white">Réference</td>
                                                            <td class="text-white">Type</td>
                                                            <td class="text-white">Statut</td>
                                                            <td class="text-white"></td>
                                                        </tr>
                                                    </thead>
                                                <tbody>
                                                    @foreach ($parkings->DetailsAppartement as $parking)
                                                        <tr>
                                                            <td class="text-center">
                                                                @if ($parking->statut == 'disponible')
                                                                    <input type="checkbox" name="parkings[]"
                                                                        id="{{ $parking->id }}"
                                                                        value="{{ $parking->id }}">
                                                                @endif
                                                            </td>
                                                            <td>{{ $parking->numero }}</td>
                                                            <td>{{ $parking->reference }}</td>
                                                            <td class="text-capitalize">{{ $parking->type_parking }}</td>
                                                            <td class="text-capitalize">
                                                                @if ($parking->statut == 'disponible')
                                                                    <span class="text-success">
                                                                        <b>Disponible</b>
                                                                    </span>
                                                                @else
                                                                    <span class="text-danger">
                                                                        <b>Indisponible</b>
                                                                    </span>
                                                                @endif
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{ Storage::url($parking->plan) }}"
                                                                    download="{{ $parking->etage }}" target="__blank"
                                                                    class="btn btn-sm btn-dark">
                                                                    <img width="25" height="25"
                                                                        src="https://img.icons8.com/ios-filled/25/FFFFFF/pdf--v1.png"
                                                                        alt="pdf--v1" />
                                                                    Télécharger le plan
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center text-danger alert alert-danger p-3">
                                        Aucun parking n'est disponible !
                                    </div>
                                @endif
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-dark">Envoyer</button>
                                <button type="reset" class="btn btn-secondary">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <style>
        label {
            margin-bottom: 0px !important;
        }
    </style>
@endsection
