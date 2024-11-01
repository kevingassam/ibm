<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\DetailsAppartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ParkingController extends Controller
{
    public function details_parking($id_appartement){
        $parking = Appartement::find($id_appartement);
        return view('admin.projets.parking', compact('parking'));
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


    public function store(Request $request)
    {
        $validated = $request->validate([
            'numero' => 'required|string|max:255',
            'reference' => 'required|string|max:255|unique:details_appartements,reference',
            'statut' => 'required|string|max:255',
            'plan' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048',
            'appartement_id' => 'required|integer|exists:appartements,id',
            'type_parking' => 'required|string|max:255',
        ]);
        $appartement = Appartement::find($validated['appartement_id']);
        $etage = new DetailsAppartement();
        $etage->numero = $validated['numero'];
        $etage->statut = $validated['statut'];
        $etage->reference = $validated['reference'];
        $etage->plan = $request->file('plan')->store('appartements/plans', 'public');
        $etage->appartement_id = $validated['appartement_id'];
        $etage->type_parking = $validated['type_parking'];
        $etage->save();
        return redirect()->back()->with('success', 'Etage ajouté avec succès!');
    }


    public function update(Request $request, $id){
        $validated = $request->validate([
            'numero' =>'required|string|max:255',
            'statut' =>'required|string|max:255',
            'plan' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048',
            'reference' => 'required|string|max:255 ' ,
            'type_parking' => 'required|string|max:255',
        ]);
        $etage = DetailsAppartement::find($id);
        $etage->numero = $validated['numero'];
        $etage->statut = $validated['statut'];
        $etage->reference = $validated['reference'];
        $etage->type_parking = $validated['type_parking'];
        if ($request->hasFile('plan')) {
            Storage::disk('public')->delete($etage->plan);
            $etage->plan = $request->file('plan')->store('appartements/plans', 'public');
        }
        $etage->save();
        return redirect()->back()->with('success', 'Etage modifié avec succès!');
    }



}
