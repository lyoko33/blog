<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = array("name", "article_id", "message");

    public function article() 
    {
        return $this->belongsTo(Article::class);
    }
}
