<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\DetailsAppartement;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function home()
    {
        return "home";
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
