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
            <table class="table">
                <tr>
                    <td>
                        <b>Référence :</b>
                    </td>
                    @foreach ($elements as $item)
                        <td class="text-center">
                            <b>{{ $item->reference ?? '-' }}</b>
                            <br>
                            <button class="btn btn-sm btn-danger btn-retirer-compare" type="button" data-id="{{ $item->id }}">
                                Réttirer
                            </button>
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td>
                        <b>Titre :</b>
                    </td>
                    @foreach ($elements as $item)
                        <td>
                            {{ $item->numero ?? '-' }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td>
                        <b>vocation :</b>
                    </td>
                    @foreach ($elements as $item)
                        <td>
                            {{ $item->vocation ?? '-' }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td>
                        <b>statut :</b>
                    </td>
                    @foreach ($elements as $item)
                        <td>
                            {{ $item->statut ?? '-' }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td>
                        <b>Surface terrain :</b>
                    </td>
                    @foreach ($elements as $item)
                        <td>
                            {{ $item->surface ?? '-' }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td>
                        <b>Total pieces :</b>
                    </td>
                    @foreach ($elements as $item)
                        <td>
                            {{ $item->pieces ?? '-' }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td>
                        <b>Chambres :</b>
                    </td>
                    @foreach ($elements as $item)
                        <td>
                            {{ $item->chambres ?? '-' }}
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>
    </section>

@endsection
