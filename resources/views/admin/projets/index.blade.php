@extends('admin.fixe')
@section('titre', 'Projet')

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
                            Liste des projets
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
                    <a href="{{ route('projets.create') }}" class="btn btn-primary px-4">
                        <i class="bi bi-plus-lg me-2"></i>Ajouter un projet
                    </a>
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

                                    </th>
                                    <th>Titre</th>
                                    <th>Date modification</th>
                                    <th>Date publication</th>
                                    <th>Statut</th>
                                    <th>Type</th>
                                    <th>Propriétés</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="sortable">
                                @forelse ($projets as $projet)
                                    <tr data-id="{{ $projet->id }}" id="tr-projet-{{ $projet->id }}">
                                        <td>
                                            <i class="bi bi-grid-3x3-gap" style="cursor: pointer;"></i>
                                        </td>
                                        <td>
                                            <a class="d-flex align-items-center gap-3" href="javascript:;">
                                                <div class="customer-pic">
                                                    <img src="{{ Storage::url($projet->photo) }}" class="rounded-circle"
                                                        width="40" height="40" alt="">
                                                </div>
                                                <p class="mb-0 customer-name fw-bold">
                                                    {{ $projet->nom }}
                                                </p>
                                            </a>
                                        </td>
                                        <td>
                                            {{ $projet->updated_at->diffForHumans() }}
                                        </td>
                                        <td>
                                            {{ $projet->created_at->format('d-m-Y H:m') }}
                                        </td>
                                        <td>
                                            @if ($projet->statut == 'en cours')
                                                <span class="badge bg-danger">En cours</span>
                                            @elseif ($projet->statut == 'terminé')
                                                <span class="badge bg-success">Terminer</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-dark text-capitalize">
                                                {{ $projet->type }}
                                            </span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-dark" type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ModalAppartement{{ $projet->id }}">
                                                <i class="bi bi-house-add"></i>
                                                Propriétés ( {{ $projet->appartements->count() }} )
                                            </button>

                                            <x-ModalProjet :Id="$projet->id"></x-ModalProjet>
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ route('projets.edit', $projet->id) }}" class="btn btn-sm btn-dark">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#ModalDelete{{ $projet->id }}">
                                                <i class="bi bi-trash-fill"></i> Supprimer
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Aucun projet trouvé.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @forelse ($projets as $projet)
                        <!-- Modal -->
                        <div class="modal fade" id="ModalAppartement{{ $projet->id }}" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">
                                            Gestion des types des propriétés
                                        </h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    @csrf
                                    <div class="modal-body">
                                        @livewire('CreateAppartement', ['projet' => $projet])
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <!--end main content-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
    <script>
        var sortable = new Sortable(document.getElementById('sortable'), {
            onEnd: function(evt) {
                var order = [];
                var rows = document.querySelectorAll('#sortable tr');
                rows.forEach(function(row) {
                    order.push(row.getAttribute('data-id'));
                });
                $.ajax({
                    url: '{{ route('update.project.order') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        order: order
                    },
                    success: function(response) {
                        console.log('Ordre mis à jour avec succès');
                    },
                    error: function(xhr, status, error) {
                        console.error('Erreur lors de la mise à jour de l\'ordre', error);
                    }
                });
            }
        });
        var sortable2 = new Sortable(document.getElementById('sortable2'), {
            onEnd: function(evt) {
                var order = [];
                var rows = document.querySelectorAll('#sortable2 tr');
                var projet_id = rows[0].getAttribute('data-projet_id');
                rows.forEach(function(row) {
                    order.push(row.getAttribute('data-id'));
                });
                $.ajax({
                    url: '{{ route('update.project.appartements') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        order: order,
                        projet_id: projet_id
                    },
                    success: function(response) {
                        console.log('Ordre mis à jour avec succès');
                    },
                    error: function(xhr, status, error) {
                        console.error('Erreur lors de la mise à jour de l\'ordre', error);
                    }
                });
            }
        });
    </script>
@endsection
