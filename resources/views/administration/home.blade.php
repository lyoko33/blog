@extends('layouts.app')

@section('style')
    <style>
        
        .sidebar p{
            margin:30px;
            font-size: 30px; 
        }

        .sidebar p a{
            text-decoration: none;
            color:black;  
        }
    </style>
@endsection
@section('content')
    <div class="row text-center">
        <div class=" sidebar col-md-3">
            <p><a href="{{ Route('home') }}">Accueil</a></p>
            <p><a href="{{ Route('categorie_index') }}">Categories</a></p>
            <p><a href="{{ Route('article_index') }}">Articles</a></p>
            <p><a href="{{ Route('contact_index') }}">Contacts</a></p> 
        </div>

        <div class=" menu col-md-9">
            @if (session('problem'))
                <div class="alert alert-danger" role="alert">
                    {!! session('problem') !!}
                </div>
            @endif

            <h2 class="text-center text-danger">Espace d'administration </h2>
            
            @yield('myContent')
        </div>
    </div>
</div>
@endsection
