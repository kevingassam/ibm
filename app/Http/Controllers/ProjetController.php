<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\DetailsAppartement;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    /**
     * Affiche la liste de tous les projets.
     */
    public function index()
    {
        $projets = Projet::all();
        return view('admin.projets.index', compact('projets'));
    }



    public function details_appartement($id_appartement)
    {
        $appartement = Appartement::find($id_appartement);
        return view('admin.projets.appartement', compact('appartement'));
    }


    /**
     * Affiche le formulaire pour créer un nouveau projet.
     */
    public function create()
    {
        return view('admin.projets.create');
    }

    /**
     * Enregistre un nouveau projet dans la base de données.
     */
    public function store(Request $request)
    {
        // Valider les champs requis
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'statut' => 'required|string|max:255',
            'map' => 'nullable|string',
            'video' => 'nullable|url',
        ]);

        // Téléverser la photo principale
        $photoPath = $request->file('photo')->store('projets/photos', 'public');

        // Téléverser les photos supplémentaires s'il y en a
        $additionalPhotos = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                $additionalPhotos[] = $file->store('projets/photos', 'public');
            }
        }

        $projet = new Projet();
        $projet->statut = $validated['statut'];
        $projet->map = $validated['map'];
        $projet->video = $validated['video'];
        $projet->photo = $photoPath;
        $projet->photos = json_encode($additionalPhotos);
        $projet->nom = $validated['nom'];
        $projet->description = $validated['description'];
        $projet->save();

        return redirect()->route('projets.index')->with('success', 'Projet créé avec succès !');
    }

    /**
     * Affiche les détails d'un projet spécifique.
     */
    public function show(Projet $projet)
    {
        return view('admin.projets.show', compact('projet'));
    }

    /**
     * Affiche le formulaire pour modifier un projet existant.
     */
    public function edit(Projet $projet)
    {
        return view('admin.projets.edit', compact('projet'));
    }

    /**
     * Met à jour un projet existant dans la base de données.
     */
    public function update(Request $request, Projet $projet)
    {
        // Valider les champs requis
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'map' => 'nullable|string',
            'video' => 'nullable|url',
            'statut' => 'required|string|max:255',
        ]);

        // Mettre à jour les champs du projet
        $projet->nom = $validated['nom'];
        $projet->description = $validated['description'];
        $projet->map = $validated['map'];
        $projet->video = $validated['video'];
        $projet->statut = $validated['statut'];

        // Si une nouvelle photo principale est uploadée, remplacer l'ancienne
        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne photo
            Storage::disk('public')->delete($projet->photo);
            // Sauvegarder la nouvelle photo
            $projet->photo = $request->file('photo')->store('projets/photos', 'public');
        }

        // Gérer les photos supplémentaires
        if ($request->hasFile('photos')) {
            // Supprimer les anciennes photos
            $oldPhotos = json_decode($projet->photos, true) ?? [];
            foreach ($oldPhotos as $oldPhoto) {
                Storage::disk('public')->delete($oldPhoto);
            }

            // Sauvegarder les nouvelles photos
            $newPhotos = [];
            foreach ($request->file('photos') as $file) {
                $newPhotos[] = $file->store('projets/photos', 'public');
            }
            $projet->photos = json_encode($newPhotos);
        }

        // Sauvegarder les modifications
        $projet->save();

        return redirect()->route('projets.index')->with('success', 'Projet mis à jour avec succès !');
    }

    /**
     * Supprime un projet de la base de données.
     */
    public function destroy(Projet $projet)
    {
        // Supprimer les fichiers associés
        Storage::disk('public')->delete($projet->photo);

        $additionalPhotos = json_decode($projet->photos, true) ?? [];
        foreach ($additionalPhotos as $photo) {
            Storage::disk('public')->delete($photo);
        }

        // Supprimer le projet de la base de données
        $projet->delete();

        return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès !');
    }



}
