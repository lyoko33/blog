<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\CategorieRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::paginate(10);
        
        return view('administration.categories.index', array("categories" =>$categories)); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.categories.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request)
    {
        Categorie::create($request->all()); 
        return redirect()->Route('categorie_index')->with(array(
            "success" => "Votre catégorie a été créée avec succès",
        ));
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
    public function edit( Categorie $categorie)
    {
        return view('administration.categories.edit', array("categorie" => $categorie)); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieRequest $request, Categorie $categorie)
    {
        $categorie->update($request->all());
        return redirect()->Route('categorie_index')->with(array(
            "success" => "Votre catégorie a été modifiée avec succès",
        )); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        foreach ($categorie->articles as $article) {
            $article->delete();
        }

        return redirect()->Route('categorie_index')->with(array(
            "success" => "Votre catégorie ainsi que ses articles ont été supprimés avec succès",
        ));

    }
}
