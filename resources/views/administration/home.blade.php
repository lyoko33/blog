@extends('layouts.app')

@section('style')
    <style>
        .sidebar {
            
            background-image: url( {{ asset("images/body.jpg") }});
        }
        .sidebar p{
            margin:30px;
            font-size: 30px; 
        }

        .sidebar p a{
            text-decoration: none;
            color:white;  
        }

        .sidebar p {
            border-bottom: 0px solid black;
            transition: border-bottom 1s, color 1s ease-in-out .2s;
        }
        .sidebar p:hover {
            border-bottom: 1px solid red;
            transition: border-bottom .3s ease .3s;
        }

        .sidebar p a, h1, h2, h3, th, a, input{ 
            font-family: 'Permanent Marker', cursive;
        }

        h1{
            text-shadow: 2px 1px 1.5px rgb(78, 75, 75);
        }

        thead{
            background-color: rgb(107, 75, 7);
            color:white;
        }

        .success{
            border-radius: 0px 30px;
            box-shadow: 4px 5px 4px red;
        }
    </style>
@endsection



@section('content')
    <div class="row text-center">
        <div class=" sidebar col-md-3 rounded-pill pb-5 ">
            <p><a href="{{ Route('home') }}">Accueil</a></p>
            <p><a href="{{ Route('categorie_index') }}">Catégories</a></p>
            <p><a href="{{ Route('article_index') }}">Articles</a></p>
            <p class="mb-5"><a href="{{ Route('contact_index') }}">Contacts</a></p> 
        </div>

        <div class=" menu col-md-9">
            @if (session('problem'))
                <div class="alert alert-danger" role="alert">
                    {!! session('problem') !!}
                </div>
            @endif

            <h1 class="text-center text-danger">Espace d'administration</h1> 
            
            @yield('myContent')
        </div>
    </div>
</div>
@endsection
