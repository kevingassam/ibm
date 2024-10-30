<div>
    <form wire:submit='save'>
        <div class="input-group mb-3">
            <input type="text" class="form-control" wire:model='nom' required placeholder="Nom de l'appartement">
            <select name="type" wire:model='type' id="type" class="form-select">
                <option value=""></option>
                <option value="habitation">Habitation</option>
                <option value="commercial">Commercial</option>
                <option value="place parking">Place parking</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit">
                    Enregistrer
                </button>
            </div>
        </div>
    </form>
    <div>
        <table class="table align-middle">
            <thead class="table-light">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Type</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($appartements as $appartement)
                    <tr>
                        <td>{{ $appartement->nom }}</td>
                        <td>{{ $appartement->type }}</td>
                        <td class="text-end">

                            @if ($appartement->type == "place parking")
                            <a href="{{ route('details_parking',$appartement->id) }}" class="btn btn-sm btn-dark">
                                Gestion ( {{ $appartement->DetailsAppartement->count() }} )
                            </a>
                            @else
                            <a href="{{ route('details_appartement',$appartement->id) }}" class="btn btn-sm btn-dark">
                                Gestion ( {{ $appartement->DetailsAppartement->count() }} )
                            </a>
                            @endif
                            <button class="btn btn-sm btn-danger" type="button" wire:click="delete({{ $appartement->id }})">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2" class="text-center">Aucune propriété disponible.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
