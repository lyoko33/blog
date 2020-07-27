<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use App\Commentaire;
use Illuminate\Http\Request;
use App\Http\Requests\CommentaireRequest;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function blog()
    {
        $categories = Categorie::all();
        $articles = Article::paginate(6);
        return view('front.blog', array("categories" => $categories, "articles" => $articles));
    }

    public function articleShow(Article $article)
    {
        // $commentaires = Commentaire::where("article_id", $article->id)->get();
        $commentaires = $article->commentaires()->get();
        return view('front.article_show', array('article'=> $article, "commentaires" => $commentaires));
    }

    public function storeCommentaire(CommentaireRequest $request, Article $article)
    {
        
        $article->commentaires()->create($request->all());
        return Redirect()->back()->with(array(
            "message" => "Votre message a été envoyé avec succes",
        ));
    }

    
    public function categorieCible(Categorie $categorie_cible)
    {
        
        $categories = Categorie::all();
        // $articles = Article::where('categorie_id', $categorie_cible->id)->paginate(1);
        $articles =  $categorie_cible->articles()->paginate(10);
        // dd($articles); 
        return view('front.blog', array('articles' => $articles, 'categories' => $categories));
        
    }
}
