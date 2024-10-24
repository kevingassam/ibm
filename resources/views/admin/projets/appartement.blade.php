@extends('admin.fixe')
@section('titre', $appartement->nom)

@section('body')
    <!--start main content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{ $infos->app_name }}</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $appartement->nom }}
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
            </div>
        </div>
        <!--end breadcrumb-->


        <div class="row g-3">
            <div class="col-auto">
                <div class="position-relative">
                    <input class="form-control px-5" type="search" placeholder="Recherche d'article">
                    <span
                        class="material-symbols-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
                </div>
            </div>
            <div class="col-auto flex-grow-1 overflow-auto">
            </div>
            <div class="col-auto">
                <div class="d-flex align-items-center gap-2 justify-content-lg-end">
                    <button type="button" class="btn btn-dark px-4" data-bs-toggle="modal" data-bs-target="#AjouteEtage">
                        <i class="bi bi-plus-lg me-2"></i>Ajouter un étage
                    </button>
                </div>
            </div>
        </div><!--end row-->

        <div class="card mt-4">
            <div class="card-body">
                <div class="customer-table">
                    <div class="table-responsive white-space-nowrap">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>
                                        <input class="form-check-input" type="checkbox">
                                    </th>
                                    <th>ID</th>
                                    <th>Numéro</th>
                                    <th>étage</th>
                                    <th>Type</th>
                                    <th>Surface</th>
                                    <th>Pièce</th>
                                    <th>Plan</th>
                                    <th>Date publication</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($appartement->DetailsAppartement as $maison)
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>{{ $maison->id }}</td>
                                    <td>{{ $maison->numero }}</td>
                                    <td>{{ $maison->etage }}</td>
                                    <td>{{ $maison->type }}</td>
                                    <td>{{ $maison->surface }}</td>
                                    <td>{{ $maison->piece }}</td>
                                    <td>
                                        <a href="{{ Storage::url($maison->plan) }}" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-file-earmark-pdf"></i> PDF
                                        </a>
                                    </td>
                                    <td>
                                        {{ $maison->created_at->format('d-m-Y H:m') }}
                                        <x-ModalEtage :Id="$maison->id"></x-ModalEtage>
                                    </td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#ModalUpdate{{ $maison->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#ModalDelete{{ $maison->id }}" >
                                            <i class="bi bi-trash-fill"></i> Supprimer
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">Aucun étage disponible.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!--end main content-->


    <div class="modal fade" id="AjouteEtage" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">
                        Ajouté un étage
                    </h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @csrf
                <div class="modal-body">
                    <form action="{{ route('etages.store') }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="appartement_id" id="appartement_id" value="{{ $appartement->id }}">
                        @csrf
                        <div class="mb-3">
                            <label for="">Numéro</label>
                            <input type="text" class="form-control" required id="numero" name="numero" required>
                            @error('numero')
                                <span class="small text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Etage</label>
                            <input type="text" class="form-control" required id="etage" name="etage" required>
                            @error('etage')
                                <span class="small text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Type</label>
                            <input type="text" class="form-control" required id="type" name="type" required>
                            @error('type')
                                <span class="small text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Surface</label>
                            <input type="text" class="form-control" required id="surface" name="surface" required>
                            @error('surface')
                                <span class="small text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Pièce</label>
                            <input type="text" class="form-control" required id="piece" name="piece" required>
                            @error('piece')
                                <span class="small text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Plan</label>
                            <input type="file" class="form-control" required id="plan" name="plan" required>
                            @error('plan')
                                <span class="small text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-dark">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
