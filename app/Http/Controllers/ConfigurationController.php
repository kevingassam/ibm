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
            'telephone' => 'nullable|string|max:20',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'adresse1' => 'nullable|string|max:255',
            'adresse2' => 'nullable|string|max:255',
            'text_footer' => 'nullable|string|max:500',
        ]);

        $information = Information::first();
        $information->app_name = $request->input("app_name");
        $information->email1 = $request->input("email1");
        $information->email2 = $request->input("email2");
        $information->telephone = $request->input("telephone");
        $information->logo = $request->input("logo");
        $information->icon = $request->input("icon");
        $information->adresse1 = $request->input("adresse1");
        $information->adresse2 = $request->input("adresse2");
        $information->text_footer = $request->input("text_footer");

        if($request->file("logo")){
            if($information->logo){
                Storage::disk('public')->delete( $information->logo);
            }
            $information->logo = $request->file('photo')->store('blogs/photos', 'public');
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
