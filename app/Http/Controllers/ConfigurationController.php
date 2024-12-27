<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigurationController extends Controller
{
    public function index()
    {
        return view('admin.configuration');
    }

    public function banners(){
        return view('admin.banners');
    }

    public function about_config(){
        return view('admin.about_config');
    }

    public function updatedd(Request $request, $id)
    {
        $request->validate([
            'app_name' => 'nullable|string|max:255',
            'email1' => 'nullable|email|max:255',
            'email2' => 'nullable|email|max:255',
            'tel1' => 'nullable|string|max:20',
            'tel2' => 'nullable|string|max:20',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_about' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_blog' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_projet' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_contact' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_contact2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'adresse1' => 'nullable|string|max:255',
            'adresse2' => 'nullable|string|max:255',
            'text_footer' => 'nullable|string|max:5000',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'map' => 'nullable|string|max:5000',
            'video' => 'nullable|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi|max:20480',

        ]);

        $information = Information::first();
        $information->app_name = $request->input("app_name");
        $information->email1 = $request->input("email1");
        $information->email2 = $request->input("email2");
        $information->adresse1 = $request->input("adresse1");
        $information->adresse2 = $request->input("adresse2");
        $information->text_footer = $request->input("text_footer");
        $information->map = $request->input("map");
        $information->tel1 = $request->input("tel1");
        $information->tel2 = $request->input("tel2");
        $information->facebook = $request->input("facebook");
        $information->instagram = $request->input("instagram");
        $information->twitter = $request->input("twitter");
        $information->linkedin = $request->input("linkedin");
        $information->youtube = $request->input("youtube");


        if ($request->file("logo")) {
            if ($information->logo) {
                Storage::disk('public')->delete($information->logo);
            }
            $information->logo = $request->file('logo')->store('informations/photos', 'public');
        }
        if ($request->file("icon")) {
            if ($information->icon) {
                Storage::disk('public')->delete($information->icon);
            }
            $information->icon = $request->file('icon')->store('informations/icons', 'public');
        }
        if ($request->file("video")) {
            if ($information->video) {
                Storage::disk('public')->delete($information->video);
            }
            $information->video = $request->file('video')->store('informations/videos', 'public');
        }
      
        if ($request->file("cover_about")) {
            if ($information->cover_about) {
                Storage::disk('public')->delete($information->cover_about);
            }
            $information->cover_about = $request->file('cover_about')->store('informations', 'public');
        }
        if ($request->file("cover_blog")) {
            if ($information->cover_blog) {
                Storage::disk('public')->delete($information->cover_blog);
            }
            $information->cover_blog = $request->file('cover_blog')->store('informations', 'public');
        }
        if ($request->file("cover_projet")) {
            if ($information->cover_projet) {
                Storage::disk('public')->delete($information->cover_projet);
            }
            $information->cover_projet = $request->file('cover_projet')->store('informations', 'public');
        }
        if ($request->file("cover_contact")) {
            if ($information->cover_contact) {
                Storage::disk('public')->delete($information->cover_contact);
            }
            $information->cover_contact = $request->file('cover_contact')->store('informations', 'public');
        }
        if ($request->file("cover_contact2")) {
            if ($information->cover_contact2) {
                Storage::disk('public')->delete($information->cover_contact2);
            }
            $information->cover_contact2 = $request->file('cover_contact2')->store('informations', 'public');
        }
       
        $information->save();
        return response()
            ->json([
                'statut' => true,
                'message' => 'Configuration modifiée avec succès!',
            ], 200);
    }



    public function update_about(Request $request)
    {
        $request->validate([
            'about_video' => 'nullable|mimes:mp4,mov,avi|max:20480',
            'about_titre' => 'nullable|string|max:2055',
            'about_texte1' => 'nullable|string|max:5055',
            'about_texte2' => 'nullable|string|max:5055',
            'about_texte3' => 'nullable|string|max:5055',
            'about_photo1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_photo2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_photo3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $information = Information::first();
         $information->about_titre = $request->input("about_titre");
        $information->about_texte1 = $request->input("about_texte1");
        $information->about_texte2 = $request->input("about_texte2");
        $information->about_texte3 = $request->input("about_texte3");
        if ($request->file("about_photo1")) {
            if ($information->about_photo1) {
                Storage::disk('public')->delete($information->about_photo1);
            }
            $information->about_photo1 = $request->file('about_photo1')->store('informations', 'public');
        }
        if ($request->file("about_photo2")) {
            if ($information->about_photo2) {
                Storage::disk('public')->delete($information->about_photo2);
            }
            $information->about_photo2 = $request->file('about_photo2')->store('informations', 'public');
        }
        if ($request->file("about_photo3")) {
            if ($information->about_photo3) {
                Storage::disk('public')->delete($information->about_photo3);
            }
            $information->about_photo3 = $request->file('about_photo3')->store('informations', 'public');
        }
        if ($request->file("about_video")) {
            if ($information->about_video) {
                Storage::disk('public')->delete($information->about_video);
            }
            $information->about_video = $request->file('about_video')->store('informations/videos', 'public');
        }

        $information->save();
        return response()
            ->json([
                'statut' => true,
                'message' => 'Configuration modifiée avec succès!',
            ], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'app_name' => 'nullable|string|max:255',
            'email1' => 'nullable|email|max:255',
            'email2' => 'nullable|email|max:255',
            'tel1' => 'nullable|string|max:20',
            'tel2' => 'nullable|string|max:20',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'adresse1' => 'nullable|string|max:255',
            'adresse2' => 'nullable|string|max:255',
            'text_footer' => 'nullable|string|max:5000',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'map' => 'nullable|string|max:5000',
            'video' => 'nullable|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi|max:20480',
        ]);

        $information = Information::first();
        $information->app_name = $request->input("app_name");
        $information->email1 = $request->input("email1");
        $information->email2 = $request->input("email2");
        $information->adresse1 = $request->input("adresse1");
        $information->adresse2 = $request->input("adresse2");
        $information->text_footer = $request->input("text_footer");
        $information->map = $request->input("map");
        $information->tel1 = $request->input("tel1");
        $information->tel2 = $request->input("tel2");
        $information->facebook = $request->input("facebook");
        $information->instagram = $request->input("instagram");
        $information->twitter = $request->input("twitter");
        $information->linkedin = $request->input("linkedin");
        $information->youtube = $request->input("youtube");




        if ($request->file("logo")) {
            if ($information->logo) {
                Storage::disk('public')->delete($information->logo);
            }
            $information->logo = $request->file('logo')->store('informations/photos', 'public');
        }
        if ($request->file("icon")) {
            if ($information->icon) {
                Storage::disk('public')->delete($information->icon);
            }
            $information->icon = $request->file('icon')->store('informations/icons', 'public');
        }
        if ($request->file("video")) {
            if ($information->video) {
                Storage::disk('public')->delete($information->video);
            }
            $information->video = $request->file('video')->store('informations/videos', 'public');
        }
        $information->save();
        return response()
            ->json([
                'statut' => true,
                'message' => 'Configuration modifiée avec succès!',
            ], 200);
    }


}

