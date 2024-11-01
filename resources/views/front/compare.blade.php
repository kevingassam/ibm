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
            <div class="col-sm-8">
                <div class="card p-3">
                    <h6>
                        <b>Liste des éléments de comparaison ({{ $elements->count() }}) </b>
                    </h6>
                    <div class="small">
                        Vous pouvez retirer des éléments de votre comparaison en cliquant sur le bouton <b class="text-danger">"Retirer"</b> pour chaque élément.
                    </div>
                    <br>
                    <table class="table">
                        <tr>
                            <td>
                            </td>
                            @foreach ($elements as $item)
                                <td class="text-center">
                                    <button class="btn btn-sm btn-danger btn-retirer-compare" type="button" data-id="{{ $item->id }}">
                                        Retirer ( <b>{{ $item->reference ?? '-' }}</b> )
                                    </button>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>
                                <b>Référence :</b>
                            </td>
                            @foreach ($elements as $item)
                                <td class="text-center">
                                    <b>{{ $item->reference ?? '-' }}</b>
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
                    <br>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="widget widget_banner  " data-bg-src="https://www.magazineb2b.com/wp-content/uploads/sites/467/2019/02/classification-immeubles-bureaux-1.jpg">
                    <div class="widget-banner text-center">
                        <h3 class="title">Besoin d'aide ? Nous sommes là pour vous aider</h3>
                        <div class="mb-3">
                            <img src="{{ $infos->GetLogo() }}" style="height: 50px !important;" alt="img">
                        </div>
                        <h5 class="subtitle">Vous bénéficiez d'une assistance en ligne</h5>
                        @if ($infos->tel1)
                            <h5 class="link">
                                <a href="tel:{{ $infos->tel1 }}">
                                    {{ $infos->tel1 }}
                                </a>
                            </h5>
                        @endif
                        <a href="{{ route('contact') }}" class="th-btn style-border th-btn-icon">Contact</a>
                    </div>
                </div>
            </div>
           </div>
        </div>
    </section>

@endsection
