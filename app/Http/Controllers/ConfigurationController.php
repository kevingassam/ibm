<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigurationController extends Controller
{
    public function index(){
        return view('admin.configuration');
    }

    public function update(Request $request,$id){
        $request->validate([
            'app_name' => 'string|max:255',
            'email1' => 'nullable|email|max:255',
            'email2' => 'nullable|email|max:255',
            'tel1' => 'nullable|string|max:20',
            'tel2' => 'nullable|string|max:20',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'adresse1' => 'nullable|string|max:255',
            'adresse2' => 'nullable|string|max:255',
            'text_footer' => 'nullable|string|max:5000',
            'map' => 'nullable|string|max:5000',
        ]);

        $information = Information::first();
        $information->app_name = $request->input("app_name");
        $information->email1 = $request->input("email1");
        $information->email2 = $request->input("email2");
        $information->logo = $request->input("logo");
        $information->icon = $request->input("icon");
        $information->adresse1 = $request->input("adresse1");
        $information->adresse2 = $request->input("adresse2");
        $information->text_footer = $request->input("text_footer");
        $information->map = $request->input("map");
        $information->tel1 = $request->input("tel1");
        $information->tel2 = $request->input("tel2");

        if($request->file("logo")){
            if($information->logo){
                Storage::disk('public')->delete( $information->logo);
            }
            $information->logo = $request->file('logo')->store('blogs/photos', 'public');
        }
        if($request->file("icon")){
            if($information->icon){
                Storage::disk('public')->delete( $information->icon);
            }
            $information->icon = $request->file('icon')->store('blogs/icons', 'public');
        }


        $information->save();
        return redirect()->route('configurations.index')->with('success','La configuration a été modifiée avec succès');
    }
}
