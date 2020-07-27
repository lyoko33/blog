@extends('administration.home')

@section('myContent')

    <h2 class="card-header mb-4">Liste des catégories</h2>
    @if (session("success"))
        <div class="alert alert-success success" role="alert">
            {{ session("success") }}
        </div>
    @endif
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
                    <td class="d-flex justify-content-center">
                        <a href="{{ Route('categorie_edit', $categorie)}}" class="btn btn-secondary mx-4">Editer</a>
                        <form cless="mx-4" method="post" action="{{ Route('categorie_delete', $categorie) }}">
                            @csrf
                            @method('delete') 
                            <input type="submit" value="supprimer" class="btn btn-danger" onclick="return confirm('Confirmer la suppression')"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="float-right">
        {{ $categories->links()}}
    </div>
    
    @else
        <h3 class="text-center">Aucune categorie</h3>
    @endif
    
    
    
    
    

@endsection