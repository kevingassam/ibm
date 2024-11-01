<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\DetailsAppartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EtageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'etage' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'reference' => 'required|string|max:255|unique:details_appartements,reference',
            'type' => 'required|string|max:255',
            'vocation' => 'required|string|max:255',
            'chambres' => 'required|string|max:255',
            'surface' => 'required|string|max:255',
            'piece' => 'required|string|max:255',
            'plan' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048',
            'appartement_id' => 'required|integer|exists:appartements,id'
        ]);
        $appartement = Appartement::find($validated['appartement_id']);


        if ($appartement->type == "habitation") {
            $validated = $request->validate([
                'surface_terrase' => 'required|string|max:255'
            ]);
        }

        $etage = new DetailsAppartement();
        $etage->etage = $request->input('etage');
        $etage->numero = $request->input('numero');
        $etage->type = $request->input('type');
        $etage->surface = $request->input('surface');
        $etage->vocation = $request->input('vocation');
        $etage->chambres = $request->input('chambres');
        $etage->reference = $request->input('reference');
        $etage->surface_terrase = $request->input('surface_terrase');
        $etage->piece = $request->input('piece');
        $etage->plan = $request->file('plan')->store('appartements/plans', 'public');
        $etage->appartement_id = $request->input('appartement_id');
        $etage->save();
        return redirect()->back()->with('success', 'Etage ajouté avec succès!');
    }

    public function destroy($id)
    {
        $etage = DetailsAppartement::find($id);
        if ($etage->plan) {
            Storage::disk('public')->delete($etage->plan);
        }
        $etage->delete();
        return redirect()->back()->with('success', 'Etage supprimé avec succès!');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'etage' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'surface' => 'required|string|max:255',
            'piece' => 'required|string|max:255',
            'plan' => 'nullable|mimes:jpeg,png,jpg,pdf|max:3048',
            'vocation' => 'required|string|max:255',
            'chambres' => 'required|string|max:255',
            'reference' => 'required|string|max:255|unique:details_appartements,reference,' . $id,
        ]);
        $etage = DetailsAppartement::find($id);

        $appartement = Appartement::find($etage->appartement_id);
        if ($appartement) {
            if ($appartement->type == "habitation") {
                $validated = $request->validate([
                    'surface_terrase' => 'required|string|max:255'
                ]);
            }
        }
        $etage->etage = $request->input('etage');
        $etage->numero = $request->input('numero');
        $etage->type = $request->input('type');
        $etage->surface = $request->input('surface');
        $etage->piece = $request->input('piece');
        $etage->vocation = $request->input('vocation');
        $etage->chambres = $request->input('chambres');
        $etage->reference = $request->input('reference');
        $etage->surface_terrase = $request->input('surface_terrase');
        if ($request->hasFile('plan')) {
            Storage::disk('public')->delete($etage->plan);
            $etage->plan = $request->file('plan')->store('appartements/plans', 'public');
        }
        $etage->save();
        return redirect()->back()->with('success', 'Etage modifié avec succès!');
    }
}
