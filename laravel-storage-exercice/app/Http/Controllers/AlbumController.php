<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view("backoffice.album.all",compact("albums"));
    }
    public function destroy($id){
        $album = Album::find($id);

        $album->delete();
   
        return redirect()->back();
   }
    public function edit($id){
        $album = Album::find($id);
        return view("backoffice.album.edit",compact("album"));
    }
    public function update($id, Request $request){
        $album = Album::find($id);
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album ->updated_at=now();
        $album->save();
        return redirect()->route("album"); 
       }
       public function create(){
        return view("backoffice.album.create");
    }

    public function store (Request $request)
    {
        $album = new album();
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album ->updated_at=now();
        $album->save();
        return redirect()->route("album"); 

    }
    public function download(Request $request)
    {
        
            $file_path = storage_path('reports');
            return Album::download($file_path);
    }
}
