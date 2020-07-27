<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        
        return view('administration.articles.index', array("articles" => $articles));      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $articles = Article::all();

        if($categories->count() == 0)
        {
            return back()->with(array(
                "problem" => "<h3 style='color:red'>Veuillez creer au moins une categorie avant de creer un article</h3>"
            ));

        } else {
            return view('administration.articles.create', array("categories" => $categories));
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $image = $request->image;
        $image_complete_name = time().$image->getClientOriginalName();
        $image->move('uploads/articles/', $image_complete_name);

        Article::create(array(
            "name" => $request->name,
            "description" => $request->description,
            "categorie_id" => $request->categorie_id,
            "image" => "uploads/articles/" . $image_complete_name
        ));

        return redirect()->Route('article_index')->with(array(
            "success" => "Votre article a été créé avec success",
        ));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('administration.articles.show', array("article" => $article)); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Categorie::all(); 
        $ancienne_image_article = $article->image;
        
        return view('administration.articles.edit', array('article' => $article, 'categories'=> $categories, 'ancienne_image_article' => $ancienne_image_article)); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article) 
    {
        $path = parse_url($article->image);
        File::delete(public_path($path['path']));
        
        $image = $request->image;
        $image_complete_name = time().$image->getClientOriginalName();
        $image->move('uploads/articles/', $image_complete_name);

        $article->update(array(
            "name" => $request->name,
            "description" => $request->description,
            "categorie_id" => $request->categorie_id,
            "image" => "uploads/articles/" . $image_complete_name
        ));

        return redirect()->Route('article_index')->with(array(
            "success" => "Votre article a été modifié avec succès",
        )); ; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {

        $path = parse_url($article->image);
        File::delete(public_path($path['path']));
        
        $article->delete();

        return redirect()->Route('article_index')->with(array(
            "success" => "Cet article a été supprimé avec succès",
        )); 
    }

    
}
