<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = array("name"); 

    public function articles()
    {
        return $this->hasMany(Article::class); 
    }
}
