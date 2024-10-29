<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'key' => 'nullable|string|max:500',
        ]);

        $key = $request->input("key") ?? null;

        $demandes = Demande::Orderby('id', "Desc");
        if ($key) {
            $demandes = $demandes->where('nom', 'like', "%$key%")
                ->orWhere('email', 'like', "%$key%")
                ->orWhere('telephone', 'like', "%$key%")
                ->orWhere('message', 'like', "%$key%");
        }
        $demandes = $demandes->paginate(15);
        return view('admin.projets.demandes', compact('demandes'));
    }


    public function destroy(Request $request,$demande){
        $demande = Demande::find($demande);
        if ($demande) {
            $demande->delete();
            return redirect()->back()
            ->with('success', 'Demande supprimée avec succès!');
        }
        return redirect()->back()
            ->with('error', 'La demande n\'existe pas!');
    }

}
