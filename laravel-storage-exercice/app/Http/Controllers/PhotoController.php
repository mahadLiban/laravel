<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index(){
        $photos = Photo::all();
        return view("backoffice.photo.all",compact("photos"));
    }
    public function destroy(Photo $photo){
        Storage::disk("public")->delete("img/".$photo->lien);

        $photo->delete();
   
        return redirect()->back();
   }
    public function edit(Photo $photo){
        return view("backoffice.photo.edit",compact("photo"));
    }
    public function update(Photo $photo, Request $request){
        $request->validate([
            "nom"=>"required",
            "categorie"=>"required",
            "description"=>"required",
        ]);
        $photo->nom = $request->nom;
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        Storage::disk("public")->delete("img/" . $photo->lien);
        $photo->lien = $request->file("lien")->hashName();
    
        $photo ->updated_at=now();
        $photo->save();
        $request->file("lien")->storePublicly("img","public");
        return redirect()->route("photo.index")->with("message", "Vous avez bien modifié la photo : " . $photo->nom); 
       }

       public function create(){
        return view("backoffice.photo.create");
    }

    public function store (Request $request)
    {
        $request->validate([
            "nom"=>"required",
            // "lien"=>"required",
            "categorie"=>"required",
            "description"=>"required"
        ]);
        $photo = new photo();
        $photo->nom = $request->nom;
        $photo->lien = $request->file("lien")->hashName();
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo ->created_at=now();
        $photo->save();
        $request->file("lien")->storePublicly("img","public");
        return redirect()->route("photo.index")->with("message", "La photo a été bien créée"); 

    }

    public function download($id)
    {
        $photo = Photo::find($id);
        return Storage::disk("public")->download('img/'.$photo->lien);
    }
}
