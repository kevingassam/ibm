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
                     {{ $etage->reference }}
                 </h6>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="{{ route('etages.update', $etage) }}" method="POST" enctype="multipart/form-data">
                 @method('PUT')
                 @csrf
                 <div class="modal-body">
                     @if ($errors->any())
                         <div class="alert alert-danger small">
                             <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif
                     <div class="row mb-3">
                         <div class="col-sm-6 col-6">
                             <label for="" class="mb-1">Référence</label>
                             <input type="text" class="form-control" required id="reference"
                                 value="{{ old('reference', $etage->reference) }}" name="reference" required>
                             @error('reference')
                                 <span class="small text-danger"> {{ $message }} </span>
                             @enderror
                         </div>
                         <div class="col-sm-6 col-6">
                             <label for="" class="mb-1">Numéro</label>
                             <input type="text" class="form-control" required id="numero"
                                 value="{{ old('numero', $etage->numero) }}" name="numero" required>
                             @error('numero')
                                 <span class="small text-danger"> {{ $message }} </span>
                             @enderror
                         </div>
                     </div>
                     <div class="mb-3">
                         <label for="" class="mb-1">Etage</label>
                         <input type="text" class="form-control" required id="etage"
                             value="{{ old('etage', $etage->etage) }}" name="etage" required>
                         @error('etage')
                             <span class="small text-danger"> {{ $message }} </span>
                         @enderror
                     </div>
                     <div class="row mb-3">
                         <div class="col-sm-6 col-6">
                             <label for="" class="mb-1">Type</label>
                             <select class="form-select" required id="type" name="type">
                                 <option value="résidentiel" @selected($etage->type == 'résidentiel')>Résidentiel</option>
                                 <option value="commercial" @selected($etage->type == 'commercial')>Commercial</option>
                             </select>
                             @error('type')
                                 <span class="small text-danger"> {{ $message }} </span>
                             @enderror
                         </div>
                         <div class="col-sm-6 col-6">
                             <label for="" class="mb-1">Vocation</label>
                             <select class="form-select" required id="vocation" name="vocation">
                                 <option value="location" @selected($etage->vocation == 'location')>Location</option>
                                 <option value="vente" @selected($etage->vocation == 'vente')>Vente</option>
                             </select>
                             @error('vocation')
                                 <span class="small text-danger"> {{ $message }} </span>
                             @enderror
                         </div>

                     </div>
                     <div class="mb-3">
                         <label for="" class="mb-1">Surface</label>
                         <input type="text" class="form-control" required id="surface" name="surface"
                             value="{{ old('surface', $etage->surface) }}" required>
                         @error('surface')
                             <span class="small text-danger"> {{ $message }} </span>
                         @enderror
                     </div>
                     <div class="row mb-3">
                         <div class="col-sm-6 col-6">
                             <label for="" class="mb-1">Nombre de pièce</label>
                             <input type="text" class="form-control" required id="piece"
                                 value="{{ old('piece', $etage->pieces) }}" name="piece" required>
                             @error('piece')
                                 <span class="small text-danger"> {{ $message }} </span>
                             @enderror
                         </div>
                         <div class="col-sm-6 col-6">
                             <label for="" class="mb-1">Nombre de chambre</label>
                             <input type="text" class="form-control" required id="chambres"
                                 value="{{ old('chambres', $etage->chambres) }}" name="chambres" required>
                             @error('chambres')
                                 <span class="small text-danger"> {{ $message }} </span>
                             @enderror
                         </div>
                     </div>
                     <div class="mb-3">
                         <label for="" class="mb-1">Plan</label>
                         <span class="small text-warning mb-1">
                             ( Fichiers : jpeg,png,jpg,pdf )
                         </span>
                         <input type="file" class="form-control" id="plan" name="plan"  >
                         @error('plan')
                             <span class="small text-danger"> {{ $message }} </span>
                         @enderror
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary btn-sm"
                             data-bs-dismiss="modal">Annuler</button>
                         <button type="submit" class="btn btn-dark">Ajouter</button>
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
