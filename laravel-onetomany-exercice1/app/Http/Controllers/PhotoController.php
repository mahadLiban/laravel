<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::paginate(0);
        return view('backoffice.photo.all',compact("photos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "lien"=>"required",
            "categorie"=>"required",
            "description"=>"required",
        ]);
        $photo= new Photo();
        $photo->nom = $request->nom;
        $photo->lien = $request->file("lien")->hashName();
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->album_id = $request->album_id;
        $photo->updated_at=now();
        $photo->save();
        $request->file('lien')->storePublicly("img","public");
        return redirect()->route("photos.index")->with("message",'Vous avez bien créee une nouvelle photo: '." " . $photo->nom);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('backoffice.photo.read',compact("photo"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('backoffice.photo.edit',compact("photo","albums"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            "nom"=>"required",
            "lien"=>"required",
            "categorie"=>"required",
            "description"=>"required"
        ]);
        $photo->nom = $request->nom;
        Storage::disk('public')->delete('img/'.$photo->lien);
        $photo->lien = $request->file("lien")->hashName();
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->album_id = $request->album_id;
        $photo->updated_at=now();
        $photo->save();
        $request->file("lien")->storePublicly('img','public');
        return redirect()->route("photos.index")->with("message",'Vous avez bien modifié la photo: '." " . $photo->nom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        Storage::disk("public")->delete('img/'.$photo->lien);
        $photo->delete();
        return redirect()->back();
    }

    public function download($id){
        $photo = Photo::find($id);

        return Storage::disk("public")->download('img/'.$photo->lien);
    }
}
