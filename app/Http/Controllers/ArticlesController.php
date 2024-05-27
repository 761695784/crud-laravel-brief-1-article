<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
 public function liste(){
     return view('Articles.liste');
 }

public function ajouter(){
    return view('Articles.ajouter');
}



public function ajouter_Articles_traitement(Request $request){

    $request->validate([
        'ImageArticle' =>'required',
        'TitreArticle' =>'required',
        'DescriptionArticle' =>'required',
    ]);

    $article = new Article();
    $article->ImageArticle = $request->ImageArticle;
    $article->TitreArticle = $request->TitreArticle;
    $article->DescriptionArticle = $request->TitreArticle;
    $article->save();

    return redirect('/ajouter')->with('status', 'article ajouté avec succès.');
}

 }

