 <!-- Modal -->
 <div class="modal fade" id="ModalDelete{{ $etage->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h6 class="modal-title text-white" id="exampleModalLabel">
                    Supprimer ?
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('etages.destroy', $etage) }}" method="POST" enctype="multipart/form-data">
                @method('DELETE')
                @csrf
                <div class="modal-body text-white">
                    <p>
                        Êtes-vous sur de vouloir supprimer l'étage' :
                        <strong>{{ $etage->nom }}</strong>? <br>
                        Cette action est irréversible.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">
                        Fermer
                    </button>
                    <button type="submit" class="btn btn-success">
                        Oui, confirmer !
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


 <!-- Modal -->
 <div class="modal fade" id="ModalUpdate{{ $etage->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    {{ Str::limit($etage->etage, 20) }}
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('etages.update', $etage) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Numéro</label>
                        <input type="text" class="form-control" required id="numero" name="numero" value="{{ $etage->numero }}" required>
                        @error('numero')
                            <span class="small text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Etage</label>
                        <input type="text" class="form-control" required id="etage" name="etage" value="{{ $etage->etage }}" required>
                        @error('etage')
                            <span class="small text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Type</label>
                        <input type="text" class="form-control" required id="type" name="type" value="{{ $etage->type }}" required>
                        @error('type')
                            <span class="small text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Surface</label>
                        <input type="text" class="form-control" required id="surface" name="surface" value="{{ $etage->surface }}" required>
                        @error('surface')
                            <span class="small text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Pièce</label>
                        <input type="text" class="form-control" required id="piece" name="piece" value="{{ $etage->piece }}" required>
                        @error('piece')
                            <span class="small text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Plan en pdf</label>
                        <input type="file" class="form-control"  id="plan" name="plan" >
                        @error('plan')
                            <span class="small text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">
                        Fermer
                    </button>
                    <button type="submit" class="btn btn-dark">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

