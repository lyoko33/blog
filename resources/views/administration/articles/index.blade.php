@extends('administration.home')

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

@section('myContent')
    
    <h1 class="card-header mb-4">Liste des articles</h1>
    <a class="float-right btn btn-primary" href="{{ Route('article_create') }}">Nouvel article</a>
    @if ($articles->count() > 0)
 
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Image</th>
                <th>Catégorie</th>
                <th>Nom</th>
                <th>Date de création</th>
                <th>Contenu</th>
                <th>Paramètres</th>
            </tr>
        </thead>

        <tbody>
            
            @foreach ($articles as $article)
                <tr>
                    <td><img src="{{$article->image}}" alt="{{$article->name}}" width="80" height="80"/></td>
                    <td>{{ $article->categorie->name }}</td>
                    <td>{{ $article->name }}</td>
                    <td> {{ $article->created_at }}</td>
                    <td><a class="btn btn-success" href="{{ Route('article_show', $article) }}">Contenu</a></td>
                    <td>
                        <a href="{{ Route('article_edit', $article)}}" class="btn btn-secondary">Editer</a>
                        <form method="post" action="{{ Route('article_delete', $article) }}">
                            @csrf
                            @method('delete') 
                            <input type="submit" value="supprimer" class="btn btn-danger" onclick="return confirm('Confirmer la suppression')"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h3 class="text-center">Aucun article</h3>
    @endif
    
    
    

@endsection