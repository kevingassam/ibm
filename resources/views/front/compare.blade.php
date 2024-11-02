@extends('front.fixe')
@section('titre', 'Comparaison')
@section('body')

    <!--==============================
                                Breadcumb
                            ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ $infos->GetCoverProjet() }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Outils de comparaison</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li>Comparaison</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card p-3">
                        <h6>
                            <b>Liste des éléments de comparaison ({{ $elements->count() }}) </b>
                        </h6>
                        <div class="small">
                            Vous pouvez retirer des éléments de votre comparaison en cliquant sur le bouton <b
                                class="text-danger">"Retirer"</b> pour chaque élément.
                        </div>
                        <br>
                        <table class="cart_table">
                            <thead>
                                <tr>
                                    <td class="text-white">Photo</td>
                                    <td class="text-white">Référence </td>
                                    <td class="text-white">Titre</td>
                                    <td class="text-white">Vocation</td>
                                    <td class="text-white">Statut</td>
                                    <td class="text-white">Surface</td>
                                    <td class="text-white">Surface terrasse</td>
                                    <td class="text-white">Total piéce</td>
                                    <td class="text-white">chambre</td>
                                    <td class="text-white">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($elements as $item)
                                    <tr>
                                        <td>
                                            @if ($item->appartement)
                                                @if ($item->appartement->projet)
                                                    <div class="cart-productimage-x">
                                                        <img width="91" height="91"
                                                            src="{{ Storage::url($item->appartement->projet->photo) }}"
                                                            alt="{{ $item->reference ?? '-' }}">
                                                    </div>
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            <b>{{ $item->reference ?? '-' }}</b>
                                        </td>
                                        <td>
                                            {{ $item->numero ?? '-' }}
                                        </td>
                                        <td>
                                            {{ $item->vocation ?? '-' }}
                                        </td>
                                        <td>
                                            {{ $item->statut ?? '-' }}
                                        </td>
                                        <td>
                                            {{ $item->surface ?? '-' }}
                                        </td>
                                        <td>
                                            {{ $item->surface_terrase ?? '-' }}
                                        </td>
                                        <td>
                                            {{ $item->pieces ?? '-' }}
                                        </td>
                                        <td>
                                            {{ $item->chambres ?? '-' }}
                                        </td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-danger btn-retirer-compare" type="button"
                                                data-id="{{ $item->id }}">
                                                Retirer
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <style>
        .cart-productimage-x {
            height: 70px;
            width: 70px;
            overflow: hidden;
            display: block;
            margin: 0 auto;
            border-radius: 10px;
        }

        .cart-productimage-x img {
            height: 100%;
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .cart-productimage-x img:hover {
            opacity: 0.5;
            cursor: pointer;
            transition: opacity 0.3s ease-in-out;
            transform: scale(1.1);
        }
    </style>

@endsection
