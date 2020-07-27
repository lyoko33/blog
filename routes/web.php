<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "FrontController@index")->name('front_index');

Route::post('/store', "ContactsController@store")->name('contact_store');
Route::get('/contact', "FrontController@contact")->name('front_contact');
Route::get('/blog', "FrontController@blog")->name('front_blog');
Route::get('/categorie_cible/{categorie_cible}', "FrontController@categorieCible")->name('categorie_cible');
Route::get('/blog/article_show/{article}', "FrontController@articleShow")->name('front_article_show');
Route::post('/blog/article/commentaire/store/{article}', "FrontController@storeCommentaire")->name('commentaire_store');

Route::get('/recherche', function(){
    $categories = \App\Categorie::where('nom', 'like', '%' . request('recherche') . '%')->get();
    $articles = \App\Article::where('titre', 'like', '%' . request('recherche') . '%')->get();
    return view('front.recherche', array("categories" => $categories,
                                    "articles" => $articles
                                  ) 
                )->with(array("titre" => "Résultat de la recherche pour : " . request('recherche')
                             )
                        );
})->name('recherche');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->prefix('administration/categories')->group(function(){
    Route::get('/index', "CategoriesController@index")->name('categorie_index');
    Route::get('/create', "CategoriesController@create")->name('categorie_create');
    Route::post('/store', "CategoriesController@store")->name('categorie_store'); 
    Route::get('/edit/{categorie}', "CategoriesController@edit")->name('categorie_edit');
    Route::put('/update/{categorie}', "CategoriesController@update")->name('categorie_update');
    Route::delete('/delete/{categorie}', "CategoriesController@destroy")->name('categorie_delete');
});

Route::middleware('auth')->prefix('administration/articles')->group(function(){
    Route::get('/index', "ArticlesController@index")->name('article_index');
    Route::get('/create', "ArticlesController@create")->name('article_create');
    Route::post('/store', "ArticlesController@store")->name('article_store');
    Route::get('/show/{article}', "ArticlesController@show")->name('article_show'); 
    Route::get('/edit/{article}', "ArticlesController@edit")->name('article_edit');
    Route::put('/update/{article}', "ArticlesController@update")->name('article_update');
    Route::delete('/delete/{article}', "ArticlesController@destroy")->name('article_delete');
});

Route::middleware('auth')->prefix('administration/contacts')->group(function(){
    Route::get('/index', "ContactsController@index")->name('contact_index');
    Route::get('/create', "ContactsController@create")->name('contact_create');
    Route::get('/show/{contact}', "ContactsController@show")->name('contact_show');
});



