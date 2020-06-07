<?php

namespace App;

use App\Categorie;
use App\Commentaire;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = array('name', 'description', 'categorie_id', 'image');
    
    public function categorie()
    {
        return $this->belongsTo(Categorie::class); 
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
