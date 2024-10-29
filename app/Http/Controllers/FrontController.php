<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Demande;
use App\Models\DetailsAppartement;
use App\Models\Partenaire;
use App\Models\Projet;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function home()
    {
        $autres = Blog::Orderby('created_at', 'desc')->take(10)->get();
        $temoignages = Temoignage::all();
        $projets = Projet::Orderby('created_at', 'desc')->take(15)->get();
        $pieces = DetailsAppartement::distinct('piece')->pluck('piece');
        $partenaires = Partenaire::select('nom', 'logo')->get();
        $total_projets = Projet::count();
        $total_appartements =  DetailsAppartement::count();
        $total_partenaires = Partenaire::count();
        $total_articles = Blog::count();
        $atouts = [
            [
                'titre' => "Emplacements étudiés",
                'icon' => "",
                'description' => "Nous privilégions les emplacements alliant cadre de vie agréable et proximité des commodités de tous les jours. Ainsi, nos appartements sont attractifs pour y habiter vous-même ou pour les mettre en location.",
            ],
            [
                'titre' => "Rapport qualité-prix",
                'icon' => "",
                'description' => "Avec Immobilière Ben Mokthar, vous bénéficiez du meilleur rapport qualité-prix. Nous apportons une attention particulière à la qualité et la durabilité des matériaux que nous utilisons, tout en veillant à vous proposer nos biens à leur juste prix.",
            ],
            [
                'titre' => "Architecture recherchée",
                'icon' => "",
                'description' => "Nous faisons en sorte que nos réalisations aient une architecture soignée et fonctionnelle. Nous ne construisons pas de simples appartements mais des logements pensés qui allient esthétique et confort pour toute la famille.",
            ],
        ];
        return view("front.index")
            ->with('autres', $autres)
            ->with('temoignages', $temoignages)
            ->with('projets', $projets)
            ->with('pieces', $pieces)
            ->with('partenaires', $partenaires)
            ->with('atouts', $atouts)
            ->with('total_projets', $total_projets)
            ->with('total_appartements', $total_appartements)
            ->with('total_partenaires', $total_partenaires)
            ->with('total_articles', $total_articles);
    }

    public function contact()
    {
        return view("front.contact");
    }


    public function compare(Request $request)
    {
        $ids = explode(',', $request->query('ids'));
        $elements = DetailsAppartement::whereIn('id', $ids)->get();
        return view('front.compare', compact('elements'));
    }

    public function demandes_post(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prennom' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|numeric',
            'message' => 'required|string|max:2550',
            'projet_id' => 'required|integer|exists:projets,id'
        ]);

        $demande = new Demande();
        $demande->nom = $request->input('nom');
        $demande->prenom = $request->input('prenom');
        $demande->email = $request->input('email');
        $demande->telephone = $request->input('telephone');
        $demande->message = $request->input('message');
        $demande->projet_id = $request->input('projet_id');
        $demande->save();
        return redirect()->back()->with('success', 'Demande créée avec succès');
    }


    public function contact_post(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|numeric',
            'message' => 'required|string|max:2550',
        ]);

        $contact  = new Contact();
        $contact->nom = $request->input('nom');
        $contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->route('contact')->with('success', 'Votre message a bien été envoyé');
    }


    public function about()
    {
        $temoignages = Temoignage::all();
        $partenaires = Partenaire::select('nom', 'logo')->get();
        return view("front.about")
            ->with('temoignages', $temoignages)
            ->with('partenaires', $partenaires);
    }

    public function projet(Request $request, $statut = null)
    {
        $key = $request->input("key") ?? null;
        $type = $request->input("type") ?? null;
        if ($statut) {
            if ($statut != "en cours" && $statut != "terminé") {
                $statut = "en cours";
            }
        }
        $projets = Projet::query();
        if ($statut) {
            $projets = $projets->where('statut', $statut);
        }
        if ($key) {
            $projets = $projets->where('nom', 'LIKE', '%' . $key . '%');
        }
        if ($type) {
            $projets = $projets->where('type', $type);
        }
        $projets = $projets->paginate(30);
        $total = Projet::where('statut', $statut)->count();
        return view("front.projet")
            ->with('projets', $projets)
            ->with('statut', $statut)
            ->with('key', $key)
            ->with('type', $type)
            ->with('total', $total);
    }


    public function projet_details($id, $nom)
    {
        $projet = Projet::find($id);
        if (!$projet) {
            abort(404);
        }
        $autres = Projet::where('type', $projet->type)->where('id', '!=', $projet->id)->take(3)->get();
        return view("front.details-projet")
            ->with('projet', $projet)
            ->with('autres', $autres);
    }


    public function article($id, $titre)
    {
        $article = Blog::find($id);
        $autres = Blog::Orderby('created_at', 'desc')->take(3)->where('id', '!=', $article->id)->get();
        return view("front.article")
            ->with('article', $article)
            ->with('titre', $titre)
            ->with('autres', $autres);
    }

    public function blogs(Request $request)
    {
        $key = $request->input('key' ??  null);
        $articles = Blog::query();
        if ($key) {
            $articles = $articles->where('titre', 'LIKE', '%' . $key . '%');
        }
        $articles = $articles->orderBy('created_at', 'desc')->paginate(50);
        $autres = Blog::Orderby('created_at', 'desc')->take(3)->get();
        return view("front.blogs")
            ->with('articles', $articles)
            ->with('key', $key)
            ->with('autres', $autres);
    }
    public function login()
    {
        return view("admin.login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function login_post(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|max:90'
        ]);

        // Authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Invalid credentials');
        }
    }


    public function dashboard()
    {
        $total_contacts = Contact::count();
        $total_projets = Projet::count();
        $total_etages = DetailsAppartement::count();
        $total_articles = Blog::count();
        return view("admin.dashboard")
            ->with('total_contacts', $total_contacts)
            ->with('total_projets', $total_projets)
            ->with('total_etages', $total_etages)
            ->with('total_articles', $total_articles);
    }
}
