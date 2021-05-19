<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view("backoffice.article.all",compact("articles"));
    }
    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
   
        return redirect()->back();
   }
    public function edit($id){
        $article = Article::find($id);
        return view("backoffice.article.edit",compact("article"));
    }
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->autor = $request->autor;
        $article->post = $request->post;
        $article ->updated_at=now();
        $article->save();
        return redirect()->route("article"); 
       }
    public function create(){
        return view("backoffice.article.create");
    }
    public function store (Request $request){
        $article = new Article;
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->autor = $request->autor;
        $article->post = $request->post;
        $article ->updated_at=now();
        $article->save();
        return redirect()->route("article"); 

    }
}
