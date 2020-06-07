<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = array("lastname", "firstname", "email", "contenu");

    
}
