<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("backoffice.user.all",compact("users"));
    }
    public function destroy($id){
        $user = User::find($id);
        Storage::disk("public")->delete("img/".$user->pdp);

        $user->delete();
   
        return redirect()->back();
   }
    public function edit($id){
        $user = User::find($id);
        return view("backoffice.user.edit",compact("user"));
    }
    public function update($id, Request $request){
        $request->validate([
            "name"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "email"=>"required",
            "pdp"=>"required",
            "password"=>"required"
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        Storage::disk("public")->delete("img/" . $user->pdp);
        $user->pdp = $request->file("pdp")->hashName();
        $user->password = $request->password;
        $user ->updated_at=now();
        $user->save();
        $request->file("pdp")->storePublicly("img","public");

        return redirect()->route("user"); 
       }
       public function create(){
        return view("backoffice.user.create");
    }

    public function store (Request $request)
    {
        $request->validate([
            "name"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "email"=>"required",
            "pdp"=>"required",
            "password"=>"required"
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->pdp = $request->file("pdp")->hashName();
        $user->password = $request->password;
        $user ->created_at=now();
        $user->save();
        $request->file("pdp")->storePublicly("img","public");
        return redirect()->route("user")->with("message", "La photo a été bien créée"); 



    }
    public function download($id)
    {
        $user = User::find($id);
        return Storage::disk("public")->download('img/'.$user->pdp);
    }
}
