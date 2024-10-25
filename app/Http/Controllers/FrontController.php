<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\DetailsAppartement;
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
        return view("front.index")
        ->with('autres', $autres)
        ->with('temoignages', $temoignages);
    }

    public function contact()
    {
        return view("front.contact");
    }

    public function about()
    {
        $temoignages = Temoignage::all();
        return view("front.about")
        ->with('temoignages', $temoignages);
    }

    public function projet($statut)
    {
        if($statut != "en cours" && $statut != "terminé"){
            $statut = "en cours";
        }
        $projets = Projet::where('statut', $statut)->get();
        return view("front.projet")
            ->with('projets', $projets)
            ->with('statut', $statut);
    }


    public function projet_details($id,$nom){
        $projet = Projet::find($id);
        if(!$projet){
            abort(404);
        }
        return view("front.details-projet")
            ->with('projet', $projet);
    }


    public function article($id,$titre){
        $article = Blog::find($id);
        $autres = Blog::Orderby('created_at', 'desc')->take(3)->where('id','!=',$article->id)->get();
        return view("front.article")
            ->with('article', $article)
            ->with('titre', $titre)
            ->with('autres', $autres);
    }

    public function blogs(Request $request)
    {
        $key = $request->input('key'??  null) ;
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
