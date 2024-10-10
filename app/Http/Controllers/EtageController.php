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
            'type' => 'required|string|max:255',
            'surface' => 'required|string|max:255',
            'piece' => 'required|string|max:255',
            'plan' => 'nullable|mimes:pdf|max:2048',
            'appartement_id' => 'required|integer|exists:appartements,id'
        ]);
        $appartement = Appartement::find($validated['appartement_id']);
        $etage = new DetailsAppartement();
        $etage->etage = $validated['etage'];
        $etage->numero = $validated['numero'];
        $etage->type = $validated['type'];
        $etage->surface = $validated['surface'];
        $etage->piece = $validated['piece'];
        $etage->plan = $request->file('plan')->store('appartements/plans', 'public');
        $etage->appartement_id = $validated['appartement_id'];
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
            'plan' => 'nullable|mimes:pdf|max:2048',
        ]);
        $etage = DetailsAppartement::find($id);
        $etage->etage = $validated['etage'];
        $etage->numero = $validated['numero'];
        $etage->type = $validated['type'];
        $etage->surface = $validated['surface'];
        $etage->piece = $validated['piece'];
        if ($request->hasFile('plan')) {

            Storage::disk('public')->delete($etage->plan);
            $etage->plan = $request->file('plan')->store('appartements/plans', 'public');
        }
        $etage->save();
        return redirect()->back()->with('success', 'Etage modifié avec succès!');
    }
}
