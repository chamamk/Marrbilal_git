<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    //Methode d'affichage avec search
    public function index()
    {
        if (request('search1')) {
            $articles = Article::where('id', 'like', '%' . request('search1') . '%')->get();
            } else {
                $articles=Article::all();
            } return
            view('article.index',compact('articles'));
    }

    //Methode qui retourne la liste des articles utilise dans la caisse
    //Methode qui retourne la liste des articles en cours de vente
    public function getArticle()
    {
        $data['articles'] = Article::all();
            return response()->json($data);
    }

    //Methode return view de creation
    public function create()
    {
        return view('article.create');
    }

    //Methode d'ajouter
    public function store(StoreArticleRequest $request)
    {
            $request->validate([
                "type_marbre_id" => "required|integer",
                "nomcommercial" => "required|string",
                "stockinitial" => "required|integer",
                "stock" => "required|integer",
                "unite" => "required|string",
                "prix" => "required|integer",
                "active" => "required|string"
            ]);
            Article::create($request->all());
                return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view ('article.show',compact('article'));
    }

    //Methode return view de modification
    public function edit(Article $article)
    {
        return view ('article.edit',compact('article'));
    }

    //Methode de modification
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $request->validate([
            "type_marbre_id" => "required|integer",
            "nomcommercial" => "required|string",
            "stockinitial" => "required|integer",
            "stock" => "required|integer",
            "unite" => "required|string",
            "prix" => "required|integer",
            "active" => "required|string"
        ]);
        $article->update($request->all());
        return redirect()->route('article.index');
    }

    //Methode de suppression
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index');

    }
}
