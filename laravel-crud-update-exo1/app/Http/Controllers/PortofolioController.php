<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index(){
        $portofolios = Portofolio::all();
        return view("backoffice.portofolio.all",compact("portofolios"));
    }
    public function destroy($id){
        $portofolio = Portofolio::find($id);
        $portofolio->delete();
   
        return redirect()->back();
   }
    public function edit($id){
        $portofolio = Portofolio::find($id);
        return view("backoffice.portofolio.edit",compact("portofolio"));
    }
    public function update($id, Request $request){
        $portofolio = Portofolio::find($id);
        $portofolio->titre = $request->titre;
        $portofolio->description = $request->description;
        $portofolio->path = $request->path;
        $portofolio->catégorie = $request->catégorie;
       

        $portofolio ->updated_at=now();
        $portofolio->save();
        return redirect()->route("portofolio"); 
       }
       public function create(){
        return view("backoffice.portofolio.create");
    }

    public function store (Request $request)
    {
        $portofolio = new Portofolio();
        $portofolio->titre = $request->titre;
        $portofolio->description = $request->description;
        $portofolio->path = $request->path;
        $portofolio->catégorie = $request->catégorie;
        $portofolio ->updated_at=now();
        $portofolio->save();
        return redirect()->route("portofolio"); 

    }
}
