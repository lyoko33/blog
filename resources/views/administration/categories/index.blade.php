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

    <h1 class="card-header mb-4">Liste des catégories</h1>
    <a class="float-right btn btn-primary" href="{{ Route('categorie_create') }}">Nouvelle catégorie</a> 
    @if ($categories->count() > 0)
    
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Paramètres</th>
            </tr>
        </thead>

        <tbody>
            
            @foreach ($categories as $categorie)
                <tr>
                    <td>{{ $categorie->name }}</td>
                    <td>
                        <a href="{{ Route('categorie_edit', $categorie)}}" class="btn btn-secondary">Editer</a>
                        <form method="post" action="{{ Route('categorie_delete', $categorie) }}">
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
        <h3 class="text-center">Aucune categorie</h3>
    @endif
    
    
    
    
    

@endsection