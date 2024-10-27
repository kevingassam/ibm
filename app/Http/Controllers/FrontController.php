<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Blog;
use App\Models\Contact;
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
        return view("front.index")
            ->with('autres', $autres)
            ->with('temoignages', $temoignages)
            ->with('projets', $projets)
            ->with('pieces', $pieces)
            ->with('partenaires', $partenaires);
    }

    public function contact()
    {
        return view("front.contact");
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
        return view("front.about")
            ->with('temoignages', $temoignages);
    }

    public function projet(Request $request, $statut)
    {
        $key = $request->input("key") ?? null;
        $type = $request->input("type") ?? null;
        if ($statut != "en cours" && $statut != "terminé") {
            $statut = "en cours";
        }
        $projets = Projet::where('statut', $statut);
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
        return view("front.details-projet")
            ->with('projet', $projet);
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
