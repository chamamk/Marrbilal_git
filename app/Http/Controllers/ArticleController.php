<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        if (request('search1')) {
            $articles = Article::where('nomcommercial', 'like', '%' . request('search1') . '%')->get();
            } else {
                $articles=Article::all();
            } return
            view('article.index',compact('articles'));
    }
    public function printviewarticle()
    {
        $articles = Article::all();
            return view ('article.printArticle')->with('articles',$articles);
    }
    public function getArticle()
    {
        $data['articles'] = Article::all();
            return response()->json($data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /*
     * Store a newly created resource in storage.
     */
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view ('article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index');

    }
}
